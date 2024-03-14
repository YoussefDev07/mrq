if (localStorage.getItem("theme") == "yellow")
  document.querySelector 'link[href="./css/main.css"]'
  .insertAdjacentHTML "afterend", '<link rel="stylesheet" type="text/css" href="./css/theme.css">'

# error-page

home = document.getElementById "home"
refresh = document.getElementById "refresh"

home?.onclick = ->
  window.location.replace "file:///C:/xampp/htdocs/www/mrq/home.html"

refresh?.onclick = ->
  window.location.reload()