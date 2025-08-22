var carousel = document.querySelector(".project-carousel");
var carouselContent = document.querySelector(".project-carousel-content");
var slides = document.querySelectorAll(".project-carousel-slide");
var arrayOfSlides = Array.prototype.slice.call(slides);
var carouselDisplaying;
var screenSize;
var lengthOfSlide;
setScreenSize();
function addClone() {
    var lastSlide = carouselContent.lastElementChild.cloneNode(true);
    lastSlide.style.left = -lengthOfSlide + "px";
    carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
}
function removeClone() {
    var firstSlide = carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
}
function moveSlidesRight() {
    var slides = document.querySelectorAll(".project-carousel-slide");
    var slidesArray = Array.prototype.slice.call(slides);
    var width = 0;
    slidesArray.forEach(function (el, i) {
        el.style.left = width + "px";
        if(width == 0){
                indicator = el.querySelector('.invisible-indicator').value;
                document.getElementById(indicator).classList.add('project-active');
        }
        else{
            indicator = el.querySelector('.invisible-indicator').value;
            if(document.getElementById(indicator).classList.contains("project-active")){
                document.getElementById(indicator).classList.remove('project-active');
            }
        }
        width += lengthOfSlide;
    });
    addClone();
}
moveSlidesRight();
function moveSlidesLeft() {
    var slides = document.querySelectorAll(".project-carousel-slide");
    var slidesArray = Array.prototype.slice.call(slides);
    slidesArray = slidesArray.reverse();
    var maxWidth = (slidesArray.length - 1) * lengthOfSlide;
    slidesArray.forEach(function (el, i) {
        maxWidth -= lengthOfSlide;
        if(maxWidth == 0){
            indicator = el.querySelector('.invisible-indicator').value;
            document.getElementById(indicator).classList.add('project-active');
        }
        else{
            indicator = el.querySelector('.invisible-indicator').value;
            if(document.getElementById(indicator).classList.contains("project-active")){
                document.getElementById(indicator).classList.remove('project-active');
            }
        }
        el.style.left = maxWidth + "px";
    });
}
function setScreenSize() {
    if(window.innerWidth >= 768){
        carouselDisplaying = 1.5;
    }
    else{
        carouselDisplaying = 1;
    }
    getScreenSize();
}
window.addEventListener("resize", setScreenSize);
function getScreenSize() {
    var slides = document.querySelectorAll(".project-carousel-slide");
    var slidesArray = Array.prototype.slice.call(slides);
    var carouselwidth = carousel.offsetWidth;
    if(carouselwidth > 1360){
        carouselwidth = 1360;
    }
    lengthOfSlide = carouselwidth / carouselDisplaying;
    var initialWidth = -lengthOfSlide;
    slidesArray.forEach(function (el) {
        el.style.width = lengthOfSlide + "px";
        el.style.left = initialWidth + "px";
        initialWidth += lengthOfSlide;
    });
}
var rightNav = document.querySelector(".project-carousel-nav-right");
rightNav.addEventListener("click", moveLeftCarousel);
var moving = true;
function moveRightCarousel() {
    if (moving) {
        moving = false;
        var lastSlide = carouselContent.lastElementChild;
        lastSlide.parentNode.removeChild(lastSlide);
        carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
        removeClone();
        var firstSlide = carouselContent.firstElementChild;
        firstSlide.addEventListener("transitionend", activateAgain);
        moveSlidesRight();
    }
}
function activateAgain() {
    var firstSlide = carouselContent.firstElementChild;
    moving = true;
    firstSlide.removeEventListener("transitionend", activateAgain);
}
var leftNav = document.querySelector(".project-carousel-nav-left");
leftNav.addEventListener("click", moveRightCarousel);
function moveLeftCarousel() {
    if (moving) {
        moving = false;
        removeClone();
        var firstSlide = carouselContent.firstElementChild;
        firstSlide.addEventListener("transitionend", replaceToEnd);
        moveSlidesLeft();
    }
}
function replaceToEnd() {
    var firstSlide = carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
    carouselContent.appendChild(firstSlide);
    firstSlide.style.left =
        (arrayOfSlides.length - 1) * lengthOfSlide + "px";
    addClone();
    moving = true;
    firstSlide.removeEventListener("transitionend", replaceToEnd);
}
carouselContent.addEventListener("mousedown", seeMovement);
var initialX;
var initialPos;
function seeMovement(e) {
    initialX = e.clientX;
    getInitialPos();
    carouselContent.addEventListener("mousemove", slightMove);
    document.addEventListener("mouseup", moveBasedOnMouse);
}
function slightMove(e) {
    if (moving) {
        var movingX = e.clientX;
        var difference = initialX - movingX;
        if (Math.abs(difference) < lengthOfSlide / 4) {
            slightMoveSlides(difference);
        }
    }
}
function getInitialPos() {
    var slides = document.querySelectorAll(".project-carousel-slide");
    var slidesArray = Array.prototype.slice.call(slides);
    initialPos = [];
    slidesArray.forEach(function (el) {
        var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
        initialPos.push(left);
    });
}
function slightMoveSlides(newX) {
    var slides = document.querySelectorAll(".project-carousel-slide");
    var slidesArray = Array.prototype.slice.call(slides);
    slidesArray.forEach(function (el, i) {
        var oldLeft = initialPos[i];
        el.style.left = oldLeft + newX + "px";
    });
}
function moveBasedOnMouse(e) {
    var finalX = e.clientX;
    if (initialX - finalX > 0) {
        moveRightCarousel();
    } else if (initialX - finalX < 0) {
        moveLeftCarousel();
    }
    document.removeEventListener("mouseup", moveBasedOnMouse);
    carouselContent.removeEventListener("mousemove", slightMove);
}

let touch_carousel_slider = document.getElementById("touch-carousel-slider")
touch_carousel_slider.addEventListener("touchstart", startTouchCarouselSlider, {passive: true});
touch_carousel_slider.addEventListener("touchmove", moveTouchInfiniteSlider, {passive: true});

// Swipe Up / Down / Left / Right
var initialCarouselX = null;
var initialCarouselY = null;

function startTouchCarouselSlider(e) {
    initialCarouselX = e.touches[0].clientX;
    initialCarouselY = e.touches[0].clientY;
};

function moveTouchInfiniteSlider(e) {
    if (initialCarouselX === null) {
        return;
    }
    if (initialCarouselY === null) {
        return;
    }
    var currentCarouselX = e.touches[0].clientX;
    var currentCarouselY = e.touches[0].clientY;
    var diffCarouselX = initialCarouselX - currentCarouselX;
    var diffCarouselY = initialCarouselX - currentCarouselY;
    if (diffCarouselX > 0) {
        moveLeftCarousel()
    } else {
        moveRightCarousel()
    }
    initialCarouselX = null;
    initialCarouselY = null;
    e.preventDefault();
};

//people carousel starts

var people_carousel = document.querySelector(".people-carousel");
var people_carouselContent = document.querySelector(".people-carousel-content");
var people_slides = document.querySelectorAll(".people-carousel-slide");
var arrayOfpeople_slides = Array.prototype.slice.call(people_slides);
var people_carouselDisplaying;
var people_screenSize;
var people_lengthOfSlide;
setpeople_screenSize();
function people_addClone() {
    var lastSlide = people_carouselContent.lastElementChild.cloneNode(true);
    lastSlide.style.left = -people_lengthOfSlide + "px";
    people_carouselContent.insertBefore(lastSlide, people_carouselContent.firstChild);
}
function people_removeClone() {
    var firstSlide = people_carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
}
function movepeople_slidesRight() {
    var people_slides = document.querySelectorAll(".people-carousel-slide");
    var people_slidesArray = Array.prototype.slice.call(people_slides);
    var width = 0;
    people_slidesArray.forEach(function (el, i) {
        el.style.left = width + "px";
        if(width == 0){
                indicator = el.querySelector('.people-invisible-indicator').value;
                document.getElementById(indicator).classList.add('people-active');
        }
        else{
                indicator = el.querySelector('.people-invisible-indicator').value;
                console.log(indicator)
            if(document.getElementById(indicator).classList.contains("people-active")){
                document.getElementById(indicator).classList.remove('people-active');
            }
        }
        width += people_lengthOfSlide;
    });
    people_addClone();
}
movepeople_slidesRight();
function movepeople_slidesLeft() {
    var people_slides = document.querySelectorAll(".people-carousel-slide");
    var people_slidesArray = Array.prototype.slice.call(people_slides);
    people_slidesArray = people_slidesArray.reverse();
    var maxWidth = (people_slidesArray.length - 1) * people_lengthOfSlide;
    people_slidesArray.forEach(function (el, i) {
        maxWidth -= people_lengthOfSlide;
        if(maxWidth == 0){
            indicator = el.querySelector('.people-invisible-indicator').value;
            document.getElementById(indicator).classList.add('people-active');
        }
        else{
            indicator = el.querySelector('.people-invisible-indicator').value;
            console.log(indicator)
            if(document.getElementById(indicator).classList.contains("people-active")){
                document.getElementById(indicator).classList.remove('people-active');
            }
        }
        el.style.left = maxWidth + "px";
    });
}
function setpeople_screenSize() {
    if(window.innerWidth >= 768){
        people_carouselDisplaying = 4;
    }
    else{
        people_carouselDisplaying = 1;
    }
    getpeople_screenSize();
}
window.addEventListener("resize", setpeople_screenSize);
function getpeople_screenSize() {
    var people_slides = document.querySelectorAll(".people-carousel-slide");
    var people_slidesArray = Array.prototype.slice.call(people_slides);
    var people_carouselwidth = people_carousel.offsetWidth;
    if(people_carouselwidth > 1360){
        people_carouselwidth = 1360;
    }
    people_lengthOfSlide = people_carouselwidth / people_carouselDisplaying;
    var initialWidth = -people_lengthOfSlide;
    people_slidesArray.forEach(function (el) {
        el.style.width = people_lengthOfSlide + "px";
        el.style.left = initialWidth + "px";
        initialWidth += people_lengthOfSlide;
    });
}
var rightNav = document.querySelector(".people-carousel-nav-right");
rightNav.addEventListener("click", moveLeftpeople_carousel);
var moving = true;
function moveRightpeople_carousel() {
    if (moving) {
        moving = false;
        var lastSlide = people_carouselContent.lastElementChild;
        lastSlide.parentNode.removeChild(lastSlide);
        people_carouselContent.insertBefore(lastSlide, people_carouselContent.firstChild);
        people_removeClone();
        var firstSlide = people_carouselContent.firstElementChild;
        firstSlide.addEventListener("transitionend", people_activateAgain);
        movepeople_slidesRight();
    }
}
function people_activateAgain() {
    var firstSlide = people_carouselContent.firstElementChild;
    moving = true;
    firstSlide.removeEventListener("transitionend", people_activateAgain);
}
var leftNav = document.querySelector(".people-carousel-nav-left");
leftNav.addEventListener("click", moveRightpeople_carousel);
function moveLeftpeople_carousel() {
    if (moving) {
        moving = false;
        people_removeClone();
        var firstSlide = people_carouselContent.firstElementChild;
        firstSlide.addEventListener("transitionend", people_replaceToEnd);
        movepeople_slidesLeft();
    }
}
function people_replaceToEnd() {
    var firstSlide = people_carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
    people_carouselContent.appendChild(firstSlide);
    firstSlide.style.left =
        (arrayOfpeople_slides.length - 1) * people_lengthOfSlide + "px";
    people_addClone();
    moving = true;
    firstSlide.removeEventListener("transitionend", people_replaceToEnd);
}
people_carouselContent.addEventListener("mousedown", people_seeMovement);
var initialX;
var initialPos;
function people_seeMovement(e) {
    initialX = e.clientX;
    people_getInitialPos();
    people_carouselContent.addEventListener("mousemove", people_slightMove);
    document.addEventListener("mouseup", people_moveBasedOnMouse);
}
function people_slightMove(e) {
    if (moving) {
        var movingX = e.clientX;
        var difference = initialX - movingX;
        if (Math.abs(difference) < people_lengthOfSlide / 4) {
            people_slightMovepeople_slides(difference);
        }
    }
}
function people_getInitialPos() {
    var people_slides = document.querySelectorAll(".people-carousel-slide");
    var people_slidesArray = Array.prototype.slice.call(people_slides);
    initialPos = [];
    people_slidesArray.forEach(function (el) {
        var left = Math.floor(parseInt(el.style.left.slice(0, -2)));
        initialPos.push(left);
    });
}
function people_slightMovepeople_slides(newX) {
    var people_slides = document.querySelectorAll(".people-carousel-slide");
    var people_slidesArray = Array.prototype.slice.call(people_slides);
    people_slidesArray.forEach(function (el, i) {
        var oldLeft = initialPos[i];
        el.style.left = oldLeft + newX + "px";
    });
}
function people_moveBasedOnMouse(e) {
    var finalX = e.clientX;
    if (initialX - finalX > 0) {
        moveRightpeople_carousel();
    } else if (initialX - finalX < 0) {
        moveLeftpeople_carousel();
    }
    document.removeEventListener("mouseup", people_moveBasedOnMouse);
    people_carouselContent.removeEventListener("mousemove", people_slightMove);
}

let touch_people_carousel_slider = document.getElementById("people-touch-carousel-slider")
touch_people_carousel_slider.addEventListener("touchstart", startTouchpeople_carouselSlider, {passive: true});
touch_people_carousel_slider.addEventListener("touchmove", people_moveTouchInfiniteSlider, {passive: true});

// Swipe Up / Down / Left / Right
var initialpeople_carouselX = null;
var initialpeople_carouselY = null;

function startTouchpeople_carouselSlider(e) {
    initialpeople_carouselX = e.touches[0].clientX;
    initialpeople_carouselY = e.touches[0].clientY;
};

function people_moveTouchInfiniteSlider(e) {
    if (initialpeople_carouselX === null) {
        return;
    }
    if (initialpeople_carouselY === null) {
        return;
    }
    var currentpeople_carouselX = e.touches[0].clientX;
    var currentpeople_carouselY = e.touches[0].clientY;
    var diffpeople_carouselX = initialpeople_carouselX - currentpeople_carouselX;
    var diffpeople_carouselY = initialpeople_carouselX - currentpeople_carouselY;
    if (diffpeople_carouselX > 0) {
        moveLeftpeople_carousel()
    } else {
        moveRightpeople_carousel()
    }
    initialpeople_carouselX = null;
    initialpeople_carouselY = null;
    e.preventDefault();
};        

//people carousel ends

//real estate carousel starts

var real_carousel = document.querySelector(".real-estate-carousel");
var real_carouselContent = document.querySelector(".real-estate-carousel-content");
var real_slides = document.querySelectorAll(".real-estate-carousel-slide");
var arrayOfreal_slides = Array.prototype.slice.call(real_slides);
var real_carouselDisplaying;
var real_screenSize;
var real_lengthOfSlide;
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

// real estate carousel ends

//venture carousel starts

var ventures_carousel = document.querySelector(".ventures-carousel");
var ventures_carouselContent = document.querySelector(".ventures-carousel-content");
var ventures_slides = document.querySelectorAll(".ventures-carousel-slide");
var arrayOfventures_slides = Array.prototype.slice.call(ventures_slides);
var ventures_carouselDisplaying;
var ventures_screenSize;
var ventures_lengthOfSlide;
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

//venture carousel ends

//client carousel starts

var client_carousel = document.querySelector(".client-carousel");
var client_carouselContent = document.querySelector(".client-carousel-content");
var client_slides = document.querySelectorAll(".client-carousel-slide");
var arrayOfclient_slides = Array.prototype.slice.call(client_slides);
var client_carouselDisplaying;
var client_screenSize;
var client_lengthOfSlide;
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