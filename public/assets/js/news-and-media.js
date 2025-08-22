// 'use strict';

function Tabs() {
  var bindAll = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].addEventListener('click', change, false);
    }
  }

  var clear = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].classList.remove('active');
      var id = menuElements[i].getAttribute('data-tab');
      document.getElementById(id).classList.remove('active');
    }
  }

  var change = function(e) {
    clear();
    e.target.classList.add('active');
    var id = e.currentTarget.getAttribute('data-tab');
    document.getElementById(id).classList.add('active');
  }

  bindAll();
}

var connectTabs = new Tabs();

/*Popup */

// Popup Open
function videopopupOpen(x){
    video_src = document.getElementById(x).value;
    document.getElementById("video-frame").src = video_src;
    document.getElementById("popup").style.display="block";
    document.getElementById("overlay").style.display="block";
}
// Popup Close
function videopopupClose(){
    document.getElementById("video-frame").src = '';
    document.getElementById("popup").style.display="none";
    document.getElementById("overlay").style.display="none";
} 

function imgpopupOpen(x){
    img_src = document.getElementById(x).value;
    document.getElementById("img-frame").src = img_src;
    document.getElementById("imgpopup").style.display="block";
    document.getElementById("overlay").style.display="block";
}
function imgpopupClose(){
  document.getElementById("img-frame").src = '';
  document.getElementById("imgpopup").style.display="none";
  document.getElementById("overlay").style.display="none";
}   