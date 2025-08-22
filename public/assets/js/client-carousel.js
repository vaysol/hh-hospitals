var client_carousel = document.querySelector(".client-carousel");
var client_carouselContent = document.querySelector(".client-carousel-content");
var client_slides = document.querySelectorAll(".client-carousel-slide");
var arrayOfclient_slides = Array.prototype.slice.call(client_slides);
var client_carouselDisplaying;
var client_screenSize;
var client_lengthOfSlide;
// document.addEventListener("DOMContentLoaded",function () {
//     window.onload = () => {
//         setTimeout(() => {
            setclient_screenSize();
            function client_addClone() {
                var lastSlide = client_carouselContent.lastElementChild.cloneNode(true);
                lastSlide.style.left = -client_lengthOfSlide + "px";
                client_carouselContent.insertBefore(lastSlide, client_carouselContent.firstChild);
            }
            function client_removeClone() {
                var firstSlide = client_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
            }
            function moveclient_slidesRight() {
                var client_slides = document.querySelectorAll(".client-carousel-slide");
                var client_slidesArray = Array.prototype.slice.call(client_slides);
                var width = 0;
                client_slidesArray.forEach(function (el, i) {
                    el.style.left = width + "px";
                    if(width == 0){
                         indicator = el.querySelector('.client-invisible-indicator').value;
                         document.getElementById(indicator).classList.add('client-active');
                    }
                    else{
                        indicator = el.querySelector('.client-invisible-indicator').value;
                        if(document.getElementById(indicator).classList.contains("client-active")){
                            document.getElementById(indicator).classList.remove('client-active');
                        }
                    }
                    width += client_lengthOfSlide;
                });
                client_addClone();
            }
            moveclient_slidesRight();
            function moveclient_slidesLeft() {
                var client_slides = document.querySelectorAll(".client-carousel-slide");
                var client_slidesArray = Array.prototype.slice.call(client_slides);
                client_slidesArray = client_slidesArray.reverse();
                var maxWidth = (client_slidesArray.length - 1) * client_lengthOfSlide;
                client_slidesArray.forEach(function (el, i) {
                    maxWidth -= client_lengthOfSlide;
                    if(Math.trunc( maxWidth ) == Math.trunc(client_lengthOfSlide)){
                        indicator = el.querySelector('.client-invisible-indicator').value;
                        document.getElementById(indicator).classList.add('client-active');
                    }
                    else{
                        indicator = el.querySelector('.client-invisible-indicator').value;
                        if(document.getElementById(indicator).classList.contains("client-active")){
                            document.getElementById(indicator).classList.remove('client-active');
                        }
                    }
                    el.style.left = maxWidth + "px";
                });
            }
            function setclient_screenSize() {
                if(window.innerWidth >= 768){
                    client_carouselDisplaying = 3;
                }
                else{
                    client_carouselDisplaying = 1;
                }
                getclient_screenSize();
            }
            window.addEventListener("resize", setclient_screenSize);
            function getclient_screenSize() {
                var client_slides = document.querySelectorAll(".client-carousel-slide");
                var client_slidesArray = Array.prototype.slice.call(client_slides);
                var client_carouselwidth = client_carousel.offsetWidth;
                if(client_carouselwidth > 1360){
                    client_carouselwidth = 1360;
                }
                client_lengthOfSlide = client_carouselwidth / client_carouselDisplaying;
                var initialWidth = -client_lengthOfSlide;
                client_slidesArray.forEach(function (el) {
                    el.style.width = client_lengthOfSlide + "px";
                    el.style.left = initialWidth + "px";
                    initialWidth += client_lengthOfSlide;
                });
            }
            var rightNav = document.querySelector(".client-carousel-nav-right");
            rightNav.addEventListener("click", moveLeftclient_carousel);
            var moving = true;
            function moveRightclient_carousel() {
                if (moving) {
                    moving = false;
                    var lastSlide = client_carouselContent.lastElementChild;
                    lastSlide.parentNode.removeChild(lastSlide);
                    client_carouselContent.insertBefore(lastSlide, client_carouselContent.firstChild);
                    client_removeClone();
                    var firstSlide = client_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", client_activateAgain);
                    moveclient_slidesRight();
                }
            }
            function client_activateAgain() {
                var firstSlide = client_carouselContent.firstElementChild;
                moving = true;
                firstSlide.removeEventListener("transitionend", client_activateAgain);
            }
            var leftNav = document.querySelector(".client-carousel-nav-left");
            leftNav.addEventListener("click", moveRightclient_carousel);
            function moveLeftclient_carousel() {
                if (moving) {
                    moving = false;
                    client_removeClone();
                    var firstSlide = client_carouselContent.firstElementChild;
                    firstSlide.addEventListener("transitionend", client_replaceToEnd);
                    moveclient_slidesLeft();
                }
            }
            function client_replaceToEnd() {
                var firstSlide = client_carouselContent.firstElementChild;
                firstSlide.parentNode.removeChild(firstSlide);
                client_carouselContent.appendChild(firstSlide);
                firstSlide.style.left =
                    (arrayOfclient_slides.length - 1) * client_lengthOfSlide + "px";
                client_addClone();
                moving = true;
                firstSlide.removeEventListener("transitionend", client_replaceToEnd);
            }
            client_carouselContent.addEventListener("mousedown", client_seeMovement);
            var initialX;
            var initialPos;
            function client_seeMovement(e) {
                initialX = e.clientX;
                client_getInitialPos();
                client_carouselContent.addEventListener("mousemove", client_slightMove);
                document.addEventListener("mouseup", client_moveBasedOnMouse);
            }
            function client_slightMove(e) {
                if (moving) {
                    var movingX = e.clientX;
                    var difference = initialX - movingX;
                    if (Math.abs(difference) < client_lengthOfSlide / 4) {
                        client_slightMoveclient_slides(difference);
                    }
                }
            }
            function client_getInitialPos() {
                var client_slides = document.querySelectorAll(".client-carousel-slide");
                var client_slidesArray = Array.prototype.slice.call(client_slides);
                initialPos = [];
                client_slidesArray.forEach(function (el) {
                    var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
                    initialPos.push(left);
                });
            }
            function client_slightMoveclient_slides(newX) {
                var client_slides = document.querySelectorAll(".client-carousel-slide");
                var client_slidesArray = Array.prototype.slice.call(client_slides);
                client_slidesArray.forEach(function (el, i) {
                    var oldLeft = initialPos[i];
                    el.style.left = oldLeft + newX + "px";
                });
            }
            function client_moveBasedOnMouse(e) {
                var finalX = e.clientX;
                if (initialX - finalX > 0) {
                    moveRightclient_carousel();
                } else if (initialX - finalX < 0) {
                    moveLeftclient_carousel();
                }
                document.removeEventListener("mouseup", client_moveBasedOnMouse);
                client_carouselContent.removeEventListener("mousemove", client_slightMove);
            }

            let touch_client_carousel_slider = document.getElementById("client-touch-carousel-slider")
            touch_client_carousel_slider.addEventListener("touchstart", startTouchclient_carouselSlider, {passive: true});
            touch_client_carousel_slider.addEventListener("touchmove", client_moveTouchInfiniteSlider, {passive: true});

            // Swipe Up / Down / Left / Right
            var initialclient_carouselX = null;
            var initialclient_carouselY = null;

            function startTouchclient_carouselSlider(e) {
                initialclient_carouselX = e.touches[0].clientX;
                initialclient_carouselY = e.touches[0].clientY;
            };

            function client_moveTouchInfiniteSlider(e) {
                if (initialclient_carouselX === null) {
                    return;
                }
                if (initialclient_carouselY === null) {
                    return;
                }
                var currentclient_carouselX = e.touches[0].clientX;
                var currentclient_carouselY = e.touches[0].clientY;
                var diffclient_carouselX = initialclient_carouselX - currentclient_carouselX;
                var diffclient_carouselY = initialclient_carouselX - currentclient_carouselY;
                if (diffclient_carouselX > 0) {
                    moveLeftclient_carousel()
                } else {
                    moveRightclient_carousel()
                }
                initialclient_carouselX = null;
                initialclient_carouselY = null;
                e.preventDefault();
            };        
//         }, 3000);
//     }
// })