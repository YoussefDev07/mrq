var home, refresh;

if (localStorage.getItem("theme") === "yellow") {
  document.querySelector('link[href="./css/main.css"]').insertAdjacentHTML("afterend", '<link rel="stylesheet" type="text/css" href="./css/theme.css">');
}

// error-page
home = document.getElementById("home");

refresh = document.getElementById("refresh");

if (home != null) {
  home.onclick = function() {
    return window.location.replace("file:///C:/xampp/htdocs/www/mrq/home.html");
  };
}

if (refresh != null) {
  refresh.onclick = function() {
    return window.location.reload();
  };
}
