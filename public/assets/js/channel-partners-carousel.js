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
        el.style.left = maxWidth + "px";
    });
}
function setpeople_screenSize() {
    if(window.innerWidth >= 1300){
        people_carouselDisplaying = 5;
    }
    else if(window.innerWidth >= 1200){
        people_carouselDisplaying = 4;
    }
    else if(window.innerWidth >= 992){
        people_carouselDisplaying = 3;
    }
    else if(window.innerWidth >= 768){
        people_carouselDisplaying = 2;
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
setInterval(moveLeftpeople_carousel, 1500);
