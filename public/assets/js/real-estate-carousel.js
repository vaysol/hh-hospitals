var real_carousel = document.querySelector(".real-estate-carousel");
var real_carouselContent = document.querySelector(".real-estate-carousel-content");
var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
var arrayOfreal_slides = Array.prototype.slice.call(real_slides);
var real_carouselDisplaying;
var real_screenSize;
var real_lengthOfSlide;
// document.addEventListener("DOMContentLoaded",function () {
//     window.onload = () => {
//         setTimeout(() => {
            setreal_screenSize();
            function real_addClone() {
                var lastSlide = real_carouselContent.lastElementChild.cloneNode(true);
                lastSlide.style.left = -real_lengthOfSlide + "px";
                real_carouselContent.insertBefore(lastSlide, real_carouselContent.firstChild);
            }
            function real_removeClone() {
                var firstSlide = real_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
            }
            function movereal_slidesRight() {
                var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
                var real_slidesArray = Array.prototype.slice.call(real_slides);
                var width = 0;
                real_slidesArray.forEach(function (el, i) {
                    el.style.left = width + "px";
                    if(width == 0){
                         indicator = el.querySelector('.real-estate-invisible-indicator').value;
                         document.getElementById(indicator).classList.add('real-estate-active');
                    }
                    else{
                        indicator = el.querySelector('.real-estate-invisible-indicator').value;
                        if(document.getElementById(indicator).classList.contains("real-estate-active")){
                            document.getElementById(indicator).classList.remove('real-estate-active');
                        }
                    }
                    width += real_lengthOfSlide;
                });
                real_addClone();
            }
            movereal_slidesRight();
            function movereal_slidesLeft() {
                var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
                var real_slidesArray = Array.prototype.slice.call(real_slides);
                real_slidesArray = real_slidesArray.reverse();
                var maxWidth = (real_slidesArray.length - 1) * real_lengthOfSlide;
                real_slidesArray.forEach(function (el, i) {
                    maxWidth -= real_lengthOfSlide;
                    if(maxWidth == 0){
                        indicator = el.querySelector('.real-estate-invisible-indicator').value;
                        document.getElementById(indicator).classList.add('real-estate-active');
                    }
                    else{
                        indicator = el.querySelector('.real-estate-invisible-indicator').value;
                        if(document.getElementById(indicator).classList.contains("real-estate-active")){
                            document.getElementById(indicator).classList.remove('real-estate-active');
                        }
                    }
                    el.style.left = maxWidth + "px";
                });
            }
            function setreal_screenSize() {
                if(window.innerWidth >= 768){
                    real_carouselDisplaying = 2.3;
                }
                else{
                    real_carouselDisplaying = 1;
                }
                getreal_screenSize();
            }
            window.addEventListener("resize", setreal_screenSize);
            function getreal_screenSize() {
                var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
                var real_slidesArray = Array.prototype.slice.call(real_slides);
                var real_carouselwidth = real_carousel.offsetWidth;
                if(real_carouselwidth > 1360){
                    real_carouselwidth = 1360;
                }
                real_lengthOfSlide = real_carouselwidth / real_carouselDisplaying;
                var initialWidth = -real_lengthOfSlide;
                real_slidesArray.forEach(function (el) {
                    el.style.width = real_lengthOfSlide + "px";
                    el.style.left = initialWidth + "px";
                    initialWidth += real_lengthOfSlide;
                });
            }
            var rightNav = document.querySelector(".real-estate-carousel-nav-right");
            rightNav.addEventListener("click", moveLeftreal_carousel);
            var moving = true;
            function moveRightreal_carousel() {
                if (moving) {
                    moving = false;
                    var lastSlide = real_carouselContent.lastElementChild;
                    lastSlide.parentNode.removeChild(lastSlide);
                    real_carouselContent.insertBefore(lastSlide, real_carouselContent.firstChild);
                    real_removeClone();
                    var firstSlide = real_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", real_activateAgain);
                    movereal_slidesRight();
                }
            }
            function real_activateAgain() {
                var firstSlide = real_carouselContent.firstElementChild;
                moving = true;
                firstSlide.removeEventListener("transitionend", real_activateAgain);
            }
            var leftNav = document.querySelector(".real-estate-carousel-nav-left");
            leftNav.addEventListener("click", moveRightreal_carousel);
            function moveLeftreal_carousel() {
                if (moving) {
                    moving = false;
                    real_removeClone();
                    var firstSlide = real_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", real_replaceToEnd);
                    movereal_slidesLeft();
                }
            }
            function real_replaceToEnd() {
                var firstSlide = real_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
                real_carouselContent.appendChild(firstSlide);
                firstSlide.style.left =
                    (arrayOfreal_slides.length - 1) * real_lengthOfSlide + "px";
                real_addClone();
                moving = true;
                firstSlide.removeEventListener("transitionend", real_replaceToEnd);
            }
            real_carouselContent.addEventListener("mousedown", real_seeMovement);
            var initialX;
            var initialPos;
            function real_seeMovement(e) {
                initialX = e.clientX;
                real_getInitialPos();
                real_carouselContent.addEventListener("mousemove", real_slightMove);
                document.addEventListener("mouseup", real_moveBasedOnMouse);
            }
            function real_slightMove(e) {
                if (moving) {
                    var movingX = e.clientX;
                    var difference = initialX - movingX;
                    if (Math.abs(difference) < real_lengthOfSlide / 4) {
                        real_slightMovereal_slides(difference);
                    }
                }
            }
            function real_getInitialPos() {
                var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
                var real_slidesArray = Array.prototype.slice.call(real_slides);
                initialPos = [];
                real_slidesArray.forEach(function (el) {
                    var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
                    initialPos.push(left);
                });
            }
            function real_slightMovereal_slides(newX) {
                var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
                var real_slidesArray = Array.prototype.slice.call(real_slides);
                real_slidesArray.forEach(function (el, i) {
                    var oldLeft = initialPos[i];
                    el.style.left = oldLeft + newX + "px";
                });
            }
            function real_moveBasedOnMouse(e) {
                var finalX = e.clientX;
                if (initialX - finalX > 0) {
                    moveRightreal_carousel();
                } else if (initialX - finalX < 0) {
                    moveLeftreal_carousel();
                }
                document.removeEventListener("mouseup", real_moveBasedOnMouse);
                real_carouselContent.removeEventListener("mousemove", real_slightMove);
            }

            let touch_real_carousel_slider = document.getElementById("real-estate-touch-carousel-slider")
            touch_real_carousel_slider.addEventListener("touchstart", startTouchreal_carouselSlider, {passive: true});
            touch_real_carousel_slider.addEventListener("touchmove", real_moveTouchInfiniteSlider, {passive: true});

            // Swipe Up / Down / Left / Right
            var initialreal_carouselX = null;
            var initialreal_carouselY = null;

            function startTouchreal_carouselSlider(e) {
                initialreal_carouselX = e.touches[0].clientX;
                initialreal_carouselY = e.touches[0].clientY;
            };

            function real_moveTouchInfiniteSlider(e) {
                if (initialreal_carouselX === null) {
                    return;
                }
                if (initialreal_carouselY === null) {
                    return;
                }
                var currentreal_carouselX = e.touches[0].clientX;
                var currentreal_carouselY = e.touches[0].clientY;
                var diffreal_carouselX = initialreal_carouselX - currentreal_carouselX;
                var diffreal_carouselY = initialreal_carouselX - currentreal_carouselY;
                if (diffreal_carouselX > 0) {
                    moveLeftreal_carousel()
                } else {
                    moveRightreal_carousel()
                }
                initialreal_carouselX = null;
                initialreal_carouselY = null;
                e.preventDefault();
            };        
//         }, 3000);
//     }
// })