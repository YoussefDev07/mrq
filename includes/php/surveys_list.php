<?php
  function survey_escape($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
  }

  function survey_age($date) {
    if (empty($date)) return null;

    try {
      return (new DateTime($date))->diff(new DateTime())->y;
    }
    catch (Exception $e) {
      return null;
    }
  }

  function survey_experience($date) {
    return survey_age($date);
  }

  function survey_type_label($type) {
    if ($type == "ksa_in") return "مقيم داخل المملكة";
    if ($type == "ksa_out") return "خارج المملكة";
    return "غير محدد";
  }

  function survey_job_type_label($job_type) {
    if (strpos((string) $job_type, "طبي") === 0) return "طبي";
    if (strpos((string) $job_type, "إداري") === 0) return "إداري";
    return $job_type ?: "غير محدد";
  }

  function survey_public_message($message) {
    $lines = preg_split("/\R/u", (string) $message);
    $clean = array();

    foreach ($lines as $line) {
      $test = trim($line);

      if (preg_match("/البريد\s*الإلكتروني|رقم\s*جوال\s*\(\s*اتصال\s*\)|رقم\s*جوال\s*\(\s*واتس\s*\)|رقم\s*الجوال/u", $test)) {
        continue;
      }

      $clean[] = rtrim($line);
    }

    $message = implode("\n", $clean);
    $message = preg_replace("/\n{3,}/u", "\n\n", $message);

    return trim($message);
  }

  function survey_whatsapp_number($whatsapp) {
    return preg_replace("/\D+/", "", (string) $whatsapp);
  }

  function survey_filter_values($conn, $field) {
    $allowed = array("nationality", "spec", "job");

    if (!in_array($field, $allowed, true)) return array();

    $stmt = $conn->query("SELECT DISTINCT `$field` FROM surveys WHERE `$field` IS NOT NULL AND `$field` <> '' ORDER BY `$field` ASC");
    return $stmt->fetchAll(PDO::FETCH_COLUMN);
  }

  $filters = array(
    "q" => isset($_GET["q"]) ? trim(strip_tags($_GET["q"])):"",
    "type" => isset($_GET["type"]) ? trim(strip_tags($_GET["type"])):"",
    "job_type" => isset($_GET["job_type"]) ? trim(strip_tags($_GET["job_type"])):"",
    "nationality" => isset($_GET["nationality"]) ? trim(strip_tags($_GET["nationality"])):"",
    "spec" => isset($_GET["spec"]) ? trim(strip_tags($_GET["spec"])):"",
    "job" => isset($_GET["job"]) ? trim(strip_tags($_GET["job"])):"",
    "town" => isset($_GET["town"]) ? trim(strip_tags($_GET["town"])):"",
    "from_age" => isset($_GET["from_age"]) ? trim(strip_tags($_GET["from_age"])):"",
    "to_age" => isset($_GET["to_age"]) ? trim(strip_tags($_GET["to_age"])):"",
    "from_exp" => isset($_GET["from_exp"]) ? trim(strip_tags($_GET["from_exp"])):"",
    "to_exp" => isset($_GET["to_exp"]) ? trim(strip_tags($_GET["to_exp"])):""
  );

  $where = array();
  $params = array();

  if ($filters["q"] !== "") {
    $where[] = "(
      s.name LIKE :q_name OR
      s.nationality LIKE :q_nationality OR
      s.spec LIKE :q_spec OR
      s.job LIKE :q_job OR
      sd.town LIKE :q_town OR
      CAST(s.id AS CHAR) LIKE :q_id
    )";
    $search = "%" . $filters["q"] . "%";
    $params[":q_name"] = $search;
    $params[":q_nationality"] = $search;
    $params[":q_spec"] = $search;
    $params[":q_job"] = $search;
    $params[":q_town"] = $search;
    $params[":q_id"] = $search;
  }

  if ($filters["type"] == "ksa_in" || $filters["type"] == "ksa_out") {
    $where[] = "s.type = :type";
    $params[":type"] = $filters["type"];
  }

  if ($filters["job_type"] == "طبي") {
    $where[] = "s.job_type LIKE 'طبي%'";
  }
  elseif ($filters["job_type"] == "إداري") {
    $where[] = "s.job_type LIKE 'إداري%'";
  }

  if ($filters["nationality"] !== "") {
    $where[] = "s.nationality = :nationality";
    $params[":nationality"] = $filters["nationality"];
  }

  if ($filters["spec"] !== "") {
    $where[] = "s.spec = :spec";
    $params[":spec"] = $filters["spec"];
  }

  if ($filters["job"] !== "") {
    $where[] = "s.job = :job";
    $params[":job"] = $filters["job"];
  }

  if ($filters["town"] !== "") {
    $where[] = "sd.town LIKE :town";
    $params[":town"] = "%" . $filters["town"] . "%";
  }

  if ($filters["from_age"] !== "" && is_numeric($filters["from_age"])) {
    $where[] = "TIMESTAMPDIFF(YEAR, s.birth_date, CURDATE()) >= :from_age";
    $params[":from_age"] = (int) $filters["from_age"];
  }

  if ($filters["to_age"] !== "" && is_numeric($filters["to_age"])) {
    $where[] = "TIMESTAMPDIFF(YEAR, s.birth_date, CURDATE()) <= :to_age";
    $params[":to_age"] = (int) $filters["to_age"];
  }

  if ($filters["from_exp"] !== "" && is_numeric($filters["from_exp"])) {
    $where[] = "TIMESTAMPDIFF(YEAR, s.graduation, CURDATE()) >= :from_exp";
    $params[":from_exp"] = (int) $filters["from_exp"];
  }

  if ($filters["to_exp"] !== "" && is_numeric($filters["to_exp"])) {
    $where[] = "TIMESTAMPDIFF(YEAR, s.graduation, CURDATE()) <= :to_exp";
    $params[":to_exp"] = (int) $filters["to_exp"];
  }

  $where_sql = (count($where) > 0) ? "WHERE " . implode(" AND ", $where):"";
  $per_page = 50;

  $count_stmt = $conn->prepare("SELECT COUNT(DISTINCT s.id) FROM surveys s LEFT JOIN surveys_data sd ON sd.email = s.email $where_sql");
  foreach ($params as $key => $value) {
    $count_stmt->bindValue($key, $value);
  }
  $count_stmt->execute();
  $total = (int) $count_stmt->fetchColumn();

  $total_pages = max(1, (int) ceil($total / $per_page));
  $page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;
  if ($page < 1) $page = 1;
  if ($page > $total_pages) $page = $total_pages;
  $offset = ($page - 1) * $per_page;

  $stmt = $conn->prepare("SELECT s.*, sd.town, sd.expert_in, sd.expert_out, sd.expert_in_sa, sd.msg FROM surveys s LEFT JOIN surveys_data sd ON sd.email = s.email $where_sql ORDER BY s.send_date DESC, s.send_time DESC, s.id DESC LIMIT :offset, :per_page");
  foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
  }
  $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
  $stmt->bindValue(":per_page", $per_page, PDO::PARAM_INT);
  $stmt->execute();
  $surveys = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $filter_nationalities = survey_filter_values($conn, "nationality");
  $filter_specs = survey_filter_values($conn, "spec");
  $filter_jobs = survey_filter_values($conn, "job");

  $pagination_query = $_GET;
  unset($pagination_query["page"]);
  $pagination_query = http_build_query($pagination_query);
  $pagination_query = ($pagination_query !== "") ? "&" . $pagination_query : "";
?>