

function menu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "block";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" red", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " red";
  }
  