
const clickBtn = document.getElementById("clickBtn");
const popup = document.getElementById("popup-carousel");
const closeBtn = document.getElementById("closeBtn");
const pdfclickBtn = document.getElementById("pdfclickBtn");
const pdfpopup = document.getElementById("pdf-popup");
const pdfcloseBtn = document.getElementById("pdfcloseBtn");

clickBtn.addEventListener('click', ()=>{
    popup.style.display = 'block';
    document.querySelector(".stickyheader").style.opacity=0.5;
});
closeBtn.addEventListener('click', ()=>{
    popup.style.display = 'none';
});
pdfclickBtn.addEventListener('click', ()=>{
    pdfpopup.style.display = 'block';
});
pdfcloseBtn.addEventListener('click', ()=>{
    pdfpopup.style.display = 'none';
});
// popup.addEventListener('click', ()=>{
//     popup.style.display = 'none';
// });
// var carousel = document.querySelector(".project-carousel");
// var carouselContent = document.querySelector(".project-carousel-content");
// var slides = document.querySelectorAll(".project-carousel-slide");
// var arrayOfSlides = Array.prototype.slice.call(slides);
// var carouselDisplaying;
// var screenSize;
// var lengthOfSlide;
// setScreenSize();
// function addClone() {
//     var lastSlide = carouselContent.lastElementChild.cloneNode(true);
//     lastSlide.style.left = -lengthOfSlide + "px";
//     carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
// }
// function removeClone() {
//     var firstSlide = carouselContent.firstElementChild;
//     firstSlide.parentNode.removeChild(firstSlide);
// }
// function moveSlidesRight() {
//     var slides = document.querySelectorAll(".project-carousel-slide");
//     var slidesArray = Array.prototype.slice.call(slides);
//     var width = 0;
//     slidesArray.forEach(function (el, i) {
//         el.style.left = width + "px";
//         if(width == 0){
//                 indicator = el.querySelector('.invisible-indicator').value;
//                 document.getElementById(indicator).classList.add('project-active');
//         }
//         else{
//             indicator = el.querySelector('.invisible-indicator').value;
//             if(document.getElementById(indicator).classList.contains("project-active")){
//                 document.getElementById(indicator).classList.remove('project-active');
//             }
//         }
//         width += lengthOfSlide;
//     });
//     addClone();
// }
// moveSlidesRight();
// function moveSlidesLeft() {
//     var slides = document.querySelectorAll(".project-carousel-slide");
//     var slidesArray = Array.prototype.slice.call(slides);
//     slidesArray = slidesArray.reverse();
//     var maxWidth = (slidesArray.length - 1) * lengthOfSlide;
//     slidesArray.forEach(function (el, i) {
//         maxWidth -= lengthOfSlide;
//         if(maxWidth == 0){
//             indicator = el.querySelector('.invisible-indicator').value;
//             document.getElementById(indicator).classList.add('project-active');
//         }
//         else{
//             indicator = el.querySelector('.invisible-indicator').value;
//             if(document.getElementById(indicator).classList.contains("project-active")){
//                 document.getElementById(indicator).classList.remove('project-active');
//             }
//         }
//         el.style.left = maxWidth + "px";
//     });
// }
// function setScreenSize() {
//     carouselDisplaying = 1;
//     getScreenSize();
// }
// window.addEventListener("resize", setScreenSize);
// function getScreenSize() {
//     var slides = document.querySelectorAll(".project-carousel-slide");
//     var slidesArray = Array.prototype.slice.call(slides);
//     var carouselwidth = carousel.offsetWidth;
//     if(carouselwidth > 1360){
//         carouselwidth = 1360;
//     }
//     lengthOfSlide = carouselwidth / carouselDisplaying;
//     var initialWidth = -lengthOfSlide;
//     slidesArray.forEach(function (el) {
//         el.style.width = lengthOfSlide + "px";
//         el.style.left = initialWidth + "px";
//         initialWidth += lengthOfSlide;
//     });
// }
// var rightNav = document.querySelector(".project-carousel-nav-right");
// rightNav.addEventListener("click", moveLeftCarousel);
// var moving = true;
// function moveRightCarousel() {
//     if (moving) {
//         moving = false;
//         var lastSlide = carouselContent.lastElementChild;
//         lastSlide.parentNode.removeChild(lastSlide);
//         carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
//         removeClone();
//         var firstSlide = carouselContent.firstElementChild;
//         firstSlide.addEventListener("transitionend", activateAgain);
//         moveSlidesRight();
//     }
// }
// function activateAgain() {
//     var firstSlide = carouselContent.firstElementChild;
//     moving = true;
//     firstSlide.removeEventListener("transitionend", activateAgain);
// }
// var leftNav = document.querySelector(".project-carousel-nav-left");
// leftNav.addEventListener("click", moveRightCarousel);
// function moveLeftCarousel() {
//     if (moving) {
//         moving = false;
//         removeClone();
//         var firstSlide = carouselContent.firstElementChild;
//         firstSlide.addEventListener("transitionend", replaceToEnd);
//         moveSlidesLeft();
//     }
// }
// function replaceToEnd() {
//     var firstSlide = carouselContent.firstElementChild;
//     firstSlide.parentNode.removeChild(firstSlide);
//     carouselContent.appendChild(firstSlide);
//     firstSlide.style.left =
//         (arrayOfSlides.length - 1) * lengthOfSlide + "px";
//     addClone();
//     moving = true;
//     firstSlide.removeEventListener("transitionend", replaceToEnd);
// }
// carouselContent.addEventListener("mousedown", seeMovement);
// var initialX;
// var initialPos;
// function seeMovement(e) {
//     initialX = e.clientX;
//     getInitialPos();
//     carouselContent.addEventListener("mousemove", slightMove);
//     document.addEventListener("mouseup", moveBasedOnMouse);
// }
// function slightMove(e) {
//     if (moving) {
//         var movingX = e.clientX;
//         var difference = initialX - movingX;
//         if (Math.abs(difference) < lengthOfSlide / 4) {
//             slightMoveSlides(difference);
//         }
//     }
// }
// function getInitialPos() {
//     var slides = document.querySelectorAll(".project-carousel-slide");
//     var slidesArray = Array.prototype.slice.call(slides);
//     initialPos = [];
//     slidesArray.forEach(function (el) {
//         var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
//         initialPos.push(left);
//     });
// }
// function slightMoveSlides(newX) {
//     var slides = document.querySelectorAll(".project-carousel-slide");
//     var slidesArray = Array.prototype.slice.call(slides);
//     slidesArray.forEach(function (el, i) {
//         var oldLeft = initialPos[i];
//         el.style.left = oldLeft + newX + "px";
//     });
// }
// function moveBasedOnMouse(e) {
//     var finalX = e.clientX;
//     if (initialX - finalX > 0) {
//         moveRightCarousel();
//     } else if (initialX - finalX < 0) {
//         moveLeftCarousel();
//     }
//     document.removeEventListener("mouseup", moveBasedOnMouse);
//     carouselContent.removeEventListener("mousemove", slightMove);
// }

// let touch_carousel_slider = document.getElementById("touch-carousel-slider")
// touch_carousel_slider.addEventListener("touchstart", startTouchCarouselSlider, {passive: true});
// touch_carousel_slider.addEventListener("touchmove", moveTouchInfiniteSlider, {passive: true});

// // Swipe Up / Down / Left / Right
// var initialCarouselX = null;
// var initialCarouselY = null;

// function startTouchCarouselSlider(e) {
//     initialCarouselX = e.touches[0].clientX;
//     initialCarouselY = e.touches[0].clientY;
// };

// function moveTouchInfiniteSlider(e) {
//     if (initialCarouselX === null) {
//         return;
//     }
//     if (initialCarouselY === null) {
//         return;
//     }
//     var currentCarouselX = e.touches[0].clientX;
//     var currentCarouselY = e.touches[0].clientY;
//     var diffCarouselX = initialCarouselX - currentCarouselX;
//     var diffCarouselY = initialCarouselX - currentCarouselY;
//     if (diffCarouselX > 0) {
//         moveLeftCarousel()
//     } else {
//         moveRightCarousel()
//     }
//     initialCarouselX = null;
//     initialCarouselY = null;
//     e.preventDefault();
// };