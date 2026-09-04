if (localStorage.getItem("theme") == "old")
  document.querySelector 'link[href="./css/main.css"]'
  .insertAdjacentHTML "afterend", '<link rel="stylesheet" type="text/css" href="./css/theme.css">'

# error-page

home = document.getElementById "home"
refresh = document.getElementById "refresh"

home?.onclick = ->
  window.location.replace "http://localhost/www/Kawader%20Medical"

refresh?.onclick = ->
  window.location.reload()