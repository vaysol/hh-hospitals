var ventures_carousel = document.querySelector(".ventures-carousel");
var ventures_carouselContent = document.querySelector(".ventures-carousel-content");
var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
var arrayOfventures_slides = Array.prototype.slice.call(ventures_slides);
var ventures_carouselDisplaying;
var ventures_screenSize;
var ventures_lengthOfSlide;
// document.addEventListener("DOMContentLoaded",function () {
//     window.onload = () => {
//         setTimeout(() => {
            setventures_screenSize();
            function ventures_addClone() {
                var lastSlide = ventures_carouselContent.lastElementChild.cloneNode(true);
                lastSlide.style.left = -ventures_lengthOfSlide + "px";
                ventures_carouselContent.insertBefore(lastSlide, ventures_carouselContent.firstChild);
            }
            function ventures_removeClone() {
                var firstSlide = ventures_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
            }
            function moveventures_slidesRight() {
                var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
                var ventures_slidesArray = Array.prototype.slice.call(ventures_slides);
                var width = 0;
                ventures_slidesArray.forEach(function (el, i) {
                    el.style.left = width + "px";
                    width += ventures_lengthOfSlide;
                });
                ventures_addClone();
            }
            moveventures_slidesRight();
            function moveventures_slidesLeft() {
                var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
                var ventures_slidesArray = Array.prototype.slice.call(ventures_slides);
                ventures_slidesArray = ventures_slidesArray.reverse();
                var maxWidth = (ventures_slidesArray.length - 1) * ventures_lengthOfSlide;
                ventures_slidesArray.forEach(function (el, i) {
                    maxWidth -= ventures_lengthOfSlide;
                    el.style.left = maxWidth + "px";
                });
            }
            function setventures_screenSize() {
                if(window.innerWidth >= 768){
                    ventures_carouselDisplaying = 4.5;
                }
                else{
                    ventures_carouselDisplaying = 1;
                }
                getventures_screenSize();
            }
            window.addEventListener("resize", setventures_screenSize);
            window.addEventListener("load", setventures_screenSize);
            function getventures_screenSize() {
                var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
                var ventures_slidesArray = Array.prototype.slice.call(ventures_slides);
                var ventures_carouselwidth = ventures_carousel.offsetWidth;
                if(ventures_carouselwidth > 1360){
                    ventures_carouselwidth = 1360;
                }
                ventures_lengthOfSlide = ventures_carouselwidth / ventures_carouselDisplaying;
                var initialWidth = -ventures_lengthOfSlide;
                ventures_slidesArray.forEach(function (el) {
                    el.style.width = ventures_lengthOfSlide + "px";
                    el.style.left = initialWidth + "px";
                    initialWidth += ventures_lengthOfSlide;
                });
            }
            // var rightNav = document.querySelector(".ventures-carousel-nav-right");
            // rightNav.addEventListener("click", moveLeftventures_carousel);
            var moving = true;
            function moveRightventures_carousel() {
                if (moving) {
                    moving = false;
                    var lastSlide = ventures_carouselContent.lastElementChild;
                    lastSlide.parentNode.removeChild(lastSlide);
                    ventures_carouselContent.insertBefore(lastSlide, ventures_carouselContent.firstChild);
                    ventures_removeClone();
                    var firstSlide = ventures_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", ventures_activateAgain);
                    moveventures_slidesRight();
                }
            }
            function ventures_activateAgain() {
                var firstSlide = ventures_carouselContent.firstElementChild;
                moving = true;
                firstSlide.removeEventListener("transitionend", ventures_activateAgain);
            }
            // var leftNav = document.querySelector(".ventures-carousel-nav-left");
            // leftNav.addEventListener("click", moveRightventures_carousel);
            function moveLeftventures_carousel() {
                if (moving) {
                    moving = false;
                    ventures_removeClone();
                    var firstSlide = ventures_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", ventures_replaceToEnd);
                    moveventures_slidesLeft();
                }
            }
            function ventures_replaceToEnd() {
                var firstSlide = ventures_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
                ventures_carouselContent.appendChild(firstSlide);
                firstSlide.style.left =
                    (arrayOfventures_slides.length - 1) * ventures_lengthOfSlide + "px";
                ventures_addClone();
                moving = true;
                firstSlide.removeEventListener("transitionend", ventures_replaceToEnd);
            }
            ventures_carouselContent.addEventListener("mousedown", ventures_seeMovement);
            var initialX;
            var initialPos;
            function ventures_seeMovement(e) {
                initialX = e.clientX;
                ventures_getInitialPos();
                ventures_carouselContent.addEventListener("mousemove", ventures_slightMove);
                document.addEventListener("mouseup", ventures_moveBasedOnMouse);
            }
            function ventures_slightMove(e) {
                if (moving) {
                    var movingX = e.clientX;
                    var difference = initialX - movingX;
                    if (Math.abs(difference) < ventures_lengthOfSlide / 4) {
                        ventures_slightMoveventures_slides(difference);
                    }
                }
            }
            function ventures_getInitialPos() {
                var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
                var ventures_slidesArray = Array.prototype.slice.call(ventures_slides);
                initialPos = [];
                ventures_slidesArray.forEach(function (el) {
                    var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
                    initialPos.push(left);
                });
            }
            function ventures_slightMoveventures_slides(newX) {
                var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
                var ventures_slidesArray = Array.prototype.slice.call(ventures_slides);
                ventures_slidesArray.forEach(function (el, i) {
                    var oldLeft = initialPos[i];
                    el.style.left = oldLeft + newX + "px";
                });
            }
            function ventures_moveBasedOnMouse(e) {
                var finalX = e.clientX;
                if (initialX - finalX > 0) {
                    moveRightventures_carousel();
                } else if (initialX - finalX < 0) {
                    moveLeftventures_carousel();
                }
                document.removeEventListener("mouseup", ventures_moveBasedOnMouse);
                ventures_carouselContent.removeEventListener("mousemove", ventures_slightMove);
            }

            let touch_ventures_carousel_slider = document.getElementById("ventures-touch-carousel-slider")
            touch_ventures_carousel_slider.addEventListener("touchstart", startTouchventures_carouselSlider, {passive: true});
            touch_ventures_carousel_slider.addEventListener("touchmove", ventures_moveTouchInfiniteSlider, {passive: true});

            // Swipe Up / Down / Left / Right
            var initialventures_carouselX = null;
            var initialventures_carouselY = null;

            function startTouchventures_carouselSlider(e) {
                initialventures_carouselX = e.touches[0].clientX;
                initialventures_carouselY = e.touches[0].clientY;
            };

            function ventures_moveTouchInfiniteSlider(e) {
                if (initialventures_carouselX === null) {
                    return;
                }
                if (initialventures_carouselY === null) {
                    return;
                }
                var currentventures_carouselX = e.touches[0].clientX;
                var currentventures_carouselY = e.touches[0].clientY;
                var diffventures_carouselX = initialventures_carouselX - currentventures_carouselX;
                var diffventures_carouselY = initialventures_carouselX - currentventures_carouselY;
                if (diffventures_carouselX > 0) {
                    moveLeftventures_carousel()
                } else {
                    moveRightventures_carousel()
                }
                initialventures_carouselX = null;
                initialventures_carouselY = null;
                e.preventDefault();
            };  
            setInterval(function () {
                moveLeftventures_carousel();
            }, 10000);      
//         }, 3000);
//     }
// })