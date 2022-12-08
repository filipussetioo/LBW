const body = document.querySelector("body");
const modal = document.querySelector(".modal");
const modalButton = document.querySelector(".account-button");
console.log(modalButton)
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
let isOpened = false;
const modalContainer = document.getElementById("modal-container");
const carouselContainer = document.querySelector(".slider-container")
modalContainer.style.display = "none"

const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
  carouselContainer.style.display = ("");
};

const closeModal = () => {
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
  modalContainer.style.display = "none"
  carouselContainer.style.display="";

};

//  

modalButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
};

// carousel Movies
const repeat = false;
const noArrows = false;
const noBullets = false;


const container = document.querySelector('.slider-container');
var slide = document.querySelectorAll('.slider-single');
var slideTotal = slide.length - 1;
var slideCurrent = -1;

function initBullets() {
    if (noBullets) {
        return;
    }
    const bulletContainer = document.createElement('div');
    bulletContainer.classList.add('bullet-container')
    slide.forEach((elem, i) => {
        const bullet = document.createElement('div');
        bullet.classList.add('bullet')
        bullet.id = `bullet-index-${i}`
        bullet.addEventListener('click', () => {
            goToIndexSlide(i);
        })
        bulletContainer.appendChild(bullet);
        elem.classList.add('proactivede');
    })
    container.appendChild(bulletContainer);
}

function initArrows() {
    if (noArrows) {
        return;
    }
    const leftArrow = document.createElement('a')
    const iLeft = document.createElement('i');
    iLeft.classList.add('fa')
    iLeft.classList.add('fa-arrow-left')
    leftArrow.classList.add('slider-left')
    leftArrow.appendChild(iLeft)
    leftArrow.addEventListener('click', () => {
        slideLeft();
    })
    const rightArrow = document.createElement('a')
    const iRight = document.createElement('i');
    iRight.classList.add('fa')
    iRight.classList.add('fa-arrow-right')
    rightArrow.classList.add('slider-right')
    rightArrow.appendChild(iRight)
    rightArrow.addEventListener('click', () => {
        slideRight();
    })
    container.appendChild(leftArrow);
    container.appendChild(rightArrow);
}

function slideInitial() {
    initBullets();
    initArrows();
    setTimeout(function () {
        slideRight();
    }, 100);
}

function updateBullet() {
    if (!noBullets) {
        document.querySelector('.bullet-container').querySelectorAll('.bullet').forEach((elem, i) => {
            elem.classList.remove('active');
            if (i === slideCurrent) {
                elem.classList.add('active');
            }
        })
    }
    checkRepeat();
}

function checkRepeat() {
    if (!repeat) {
        if (slideCurrent === slide.length - 1) {
            slide[0].classList.add('not-visible');
            slide[slide.length - 1].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-right').classList.add('not-visible')
                document.querySelector('.slider-left').classList.remove('not-visible')
            }
        }
        else if (slideCurrent === 0) {
            slide[slide.length - 1].classList.add('not-visible');
            slide[0].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-left').classList.add('not-visible')
                document.querySelector('.slider-right').classList.remove('not-visible')
            }
        } else {
            slide[slide.length - 1].classList.remove('not-visible');
            slide[0].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-left').classList.remove('not-visible')
                document.querySelector('.slider-right').classList.remove('not-visible')
            }
        }
    }
}

function slideRight() {
    if (slideCurrent < slideTotal) {
        slideCurrent++;
    } else {
        slideCurrent = 0;
    }

    if (slideCurrent > 0) {
        var preactiveSlide = slide[slideCurrent - 1];
    } else {
        var preactiveSlide = slide[slideTotal];
    }
    var activeSlide = slide[slideCurrent];
    if (slideCurrent < slideTotal) {
        var proactiveSlide = slide[slideCurrent + 1];
    } else {
        var proactiveSlide = slide[0];

    }

    slide.forEach((elem) => {
        var thisSlide = elem;
        if (thisSlide.classList.contains('preactivede')) {
            thisSlide.classList.remove('preactivede');
            thisSlide.classList.remove('preactive');
            thisSlide.classList.remove('active');
            thisSlide.classList.remove('proactive');
            thisSlide.classList.add('proactivede');
        }
        if (thisSlide.classList.contains('preactive')) {
            thisSlide.classList.remove('preactive');
            thisSlide.classList.remove('active');
            thisSlide.classList.remove('proactive');
            thisSlide.classList.remove('proactivede');
            thisSlide.classList.add('preactivede');
        }
    });
    preactiveSlide.classList.remove('preactivede');
    preactiveSlide.classList.remove('active');
    preactiveSlide.classList.remove('proactive');
    preactiveSlide.classList.remove('proactivede');
    preactiveSlide.classList.add('preactive');

    activeSlide.classList.remove('preactivede');
    activeSlide.classList.remove('preactive');
    activeSlide.classList.remove('proactive');
    activeSlide.classList.remove('proactivede');
    activeSlide.classList.add('active');

    proactiveSlide.classList.remove('preactivede');
    proactiveSlide.classList.remove('preactive');
    proactiveSlide.classList.remove('active');
    proactiveSlide.classList.remove('proactivede');
    proactiveSlide.classList.add('proactive');

    updateBullet();
}

function slideLeft() {
    if (slideCurrent > 0) {
        slideCurrent--;
    } else {
        slideCurrent = slideTotal;
    }

    if (slideCurrent < slideTotal) {
        var proactiveSlide = slide[slideCurrent + 1];
    } else {
        var proactiveSlide = slide[0];
    }
    var activeSlide = slide[slideCurrent];
    if (slideCurrent > 0) {
        var preactiveSlide = slide[slideCurrent - 1];
    } else {
        var preactiveSlide = slide[slideTotal];
    }
    slide.forEach((elem) => {
        var thisSlide = elem;
        if (thisSlide.classList.contains('proactive')) {
            thisSlide.classList.remove('preactivede');
            thisSlide.classList.remove('preactive');
            thisSlide.classList.remove('active');
            thisSlide.classList.remove('proactive');
            thisSlide.classList.add('proactivede');
        }
        if (thisSlide.classList.contains('proactivede')) {
            thisSlide.classList.remove('preactive');
            thisSlide.classList.remove('active');
            thisSlide.classList.remove('proactive');
            thisSlide.classList.remove('proactivede');
            thisSlide.classList.add('preactivede');
        }
    });

    preactiveSlide.classList.remove('preactivede');
    preactiveSlide.classList.remove('active');
    preactiveSlide.classList.remove('proactive');
    preactiveSlide.classList.remove('proactivede');
    preactiveSlide.classList.add('preactive');

    activeSlide.classList.remove('preactivede');
    activeSlide.classList.remove('preactive');
    activeSlide.classList.remove('proactive');
    activeSlide.classList.remove('proactivede');
    activeSlide.classList.add('active');

    proactiveSlide.classList.remove('preactivede');
    proactiveSlide.classList.remove('preactive');
    proactiveSlide.classList.remove('active');
    proactiveSlide.classList.remove('proactivede');
    proactiveSlide.classList.add('proactive');

    updateBullet();
}

function goToIndexSlide(index) {
    const sliding = (slideCurrent > index) ? () => slideRight() : () => slideLeft();
    while (slideCurrent !== index) {
        sliding();
    }
}

slideInitial();

// carousel Series
const repeat2 = false;
const noArrows2 = false;
const noBullets2 = false;


const container2 = document.querySelector('.slider-container2');
var slide2 = document.querySelectorAll('.slider-single2');
var slideTotal2 = slide.length - 1;
var slideCurrent2 = -1;

function initBullets2() {
    if (noBullets) {
        return;
    }
    const bulletContainer2 = document.createElement('div');
    bulletContainer2.classList.add('bullet-container2')
    slide2.forEach((elem, i) => {
        const bullet2 = document.createElement('div');
        bullet2.classList.add('bullet2')
        bullet2.id = `bullet-index-${i}`
        bullet2.addEventListener('click', () => {
            goToIndexSlide(i);
        })
        bulletContainer2.appendChild(bullet2);
        elem.classList.add('proactivede');
    })
    container2.appendChild(bulletContainer2);
}

function initArrows2() {
    if (noArrows) {
        return;
    }
    const leftArrow2 = document.createElement('a')
    const iLeft2 = document.createElement('i');
    iLeft2.classList.add('fa')
    iLeft2.classList.add('fa-arrow-left')
    leftArrow2.classList.add('slider-left2')
    leftArrow2.appendChild(iLeft2)
    leftArrow2.addEventListener('click', () => {
        slideLeft2();
    })
    const rightArrow2 = document.createElement('a')
    const iRight2 = document.createElement('i');
    iRight2.classList.add('fa')
    iRight2.classList.add('fa-arrow-right')
    rightArrow2.classList.add('slider-right2')
    rightArrow2.appendChild(iRight2)
    rightArrow2.addEventListener('click', () => {
        slideRight2();
    })
    container2.appendChild(leftArrow2);
    container2.appendChild(rightArrow2);
}

function slideInitial2() {
    initBullets2();
    initArrows2();
    setTimeout(function () {
        slideRight2();
    }, 100);
}

function updateBullet2() {
    if (!noBullets) {
        document.querySelector('.bullet-container2').querySelectorAll('.bullet2').forEach((elem2, i) => {
            elem2.classList.remove('active');
            if (i === slideCurrent) {
                elem2.classList.add('active');
            }
        })
    }
    checkRepeat2();
}

function checkRepeat2() {
    if (!repeat) {
        if (slideCurrent2 === slide2.length - 1) {
            slide2[0].classList.add('not-visible');
            slide2[slide2.length - 1].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-right2').classList.add('not-visible')
                document.querySelector('.slider-left2').classList.remove('not-visible')
            }
        }
        else if (slideCurrent2 === 0) {
            slide2[slide2.length - 1].classList.add('not-visible');
            slide2[0].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-left2').classList.add('not-visible')
                document.querySelector('.slider-right2').classList.remove('not-visible')
            }
        } else {
            slide2[slide2.length - 1].classList.remove('not-visible');
            slide2[0].classList.remove('not-visible');
            if (!noArrows) {
                document.querySelector('.slider-left2').classList.remove('not-visible')
                document.querySelector('.slider-right2').classList.remove('not-visible')
            }
        }
    }
}

function slideRight2() {
    if (slideCurrent2 < slideTotal2) {
        slideCurrent2++;
    } else {
        slideCurrent2 = 0;
    }

    if (slideCurrent2 > 0) {
        var preactiveSlide2 = slide2[slideCurrent2 - 1];
    } else {
        var preactiveSlide2 = slide2[slideTotal2];
    }
    var activeSlide2 = slide2[slideCurrent2];
    if (slideCurrent2 < slideTotal2) {
        var proactiveSlide2 = slide2[slideCurrent2 + 1];
    } else {
        var proactiveSlide2 = slide2[0];

    }

    slide2.forEach((elem2) => {
        var thisSlide2 = elem2;
        if (thisSlide2.classList.contains('preactivede')) {
            thisSlide2.classList.remove('preactivede');
            thisSlide2.classList.remove('preactive');
            thisSlide2.classList.remove('active');
            thisSlide2.classList.remove('proactive');
            thisSlide2.classList.add('proactivede');
        }
        if (thisSlide2.classList.contains('preactive')) {
            thisSlide2.classList.remove('preactive');
            thisSlide2.classList.remove('active');
            thisSlide2.classList.remove('proactive');
            thisSlide2.classList.remove('proactivede');
            thisSlide2.classList.add('preactivede');
        }
    });
    preactiveSlide2.classList.remove('preactivede');
    preactiveSlide2.classList.remove('active');
    preactiveSlide2.classList.remove('proactive');
    preactiveSlide2.classList.remove('proactivede');
    preactiveSlide2.classList.add('preactive');

    activeSlide2.classList.remove('preactivede');
    activeSlide2.classList.remove('preactive');
    activeSlide2.classList.remove('proactive');
    activeSlide2.classList.remove('proactivede');
    activeSlide2.classList.add('active');

    proactiveSlide2.classList.remove('preactivede');
    proactiveSlide2.classList.remove('preactive');
    proactiveSlide2.classList.remove('active');
    proactiveSlide2.classList.remove('proactivede');
    proactiveSlide2.classList.add('proactive');

    updateBullet2();
}

function slideLeft2() {
    if (slideCurrent2 > 0) {
        slideCurrent2--;
    } else {
        slideCurrent2 = slideTotal2;
    }

    if (slideCurrent2 < slideTotal2) {
        var proactiveSlide2 = slide2[slideCurrent2 + 1];
    } else {
        var proactiveSlide2 = slide2[0];
    }
    var activeSlide2 = slide2[slideCurrent2];
    if (slideCurrent2 > 0) {
        var preactiveSlide2 = slide2[slideCurrent2 - 1];
    } else {
        var preactiveSlide2 = slide2[slideTotal2];
    }
    slide2.forEach((elem2) => {
        var thisSlide2 = elem2;
        if (thisSlide2.classList.contains('proactive')) {
            thisSlide2.classList.remove('preactivede');
            thisSlide2.classList.remove('preactive');
            thisSlide2.classList.remove('active');
            thisSlide2.classList.remove('proactive');
            thisSlide2.classList.add('proactivede');
        }
        if (thisSlide2.classList.contains('proactivede')) {
            thisSlide2.classList.remove('preactive');
            thisSlide2.classList.remove('active');
            thisSlide2.classList.remove('proactive');
            thisSlide2.classList.remove('proactivede');
            thisSlide2.classList.add('preactivede');
        }
    });

    preactiveSlide2.classList.remove('preactivede');
    preactiveSlide2.classList.remove('active');
    preactiveSlide2.classList.remove('proactive');
    preactiveSlide2.classList.remove('proactivede');
    preactiveSlide2.classList.add('preactive');

    activeSlide2.classList.remove('preactivede');
    activeSlide2.classList.remove('preactive');
    activeSlide2.classList.remove('proactive');
    activeSlide2.classList.remove('proactivede');
    activeSlide2.classList.add('active');

    proactiveSlide2.classList.remove('preactivede');
    proactiveSlide2.classList.remove('preactive');
    proactiveSlide2.classList.remove('active');
    proactiveSlide2.classList.remove('proactivede');
    proactiveSlide2.classList.add('proactive');

    updateBullet2();
}

function goToIndexSlide(index) {
    const sliding = (slideCurrent2 > index) ? () => slideRight2() : () => slideLeft2();
    while (slideCurrent2 !== index) {
        sliding();
    }
}

slideInitial2();