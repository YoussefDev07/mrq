var home, refresh;

if (localStorage.getItem("theme") === "old") {
  document.querySelector('link[href="./css/main.css"]').insertAdjacentHTML("afterend", '<link rel="stylesheet" type="text/css" href="./css/theme.css">');
}

// error-page
home = document.getElementById("home");

refresh = document.getElementById("refresh");

if (home != null) {
  home.onclick = function() {
    return window.location.replace("http://localhost/www/Kawader%20Medical");
  };
}

if (refresh != null) {
  refresh.onclick = function() {
    return window.location.reload();
  };
}
