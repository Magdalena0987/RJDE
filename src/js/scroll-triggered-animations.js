/**
 * scroll-triggered-animations.js.
 *
 */

const intersectionOptions = {
    root: null,  // use the viewport
    rootMargin: '10px', // offset
    threshold: 0.4 // the percentage of element that needs to be visible to trigger animations
}

const observerFade = new IntersectionObserver(intersectionCallFade, intersectionOptions);

const fade = document.querySelectorAll('.js-animate-fade');
    fade.forEach((e) => {
    observerFade.observe(e);
});

function intersectionCallFade(entries, observerFade) {
entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.4) {
    entry.target.classList.add('js-animate-fade-init');
    }
});
}


const observerUp = new IntersectionObserver(intersectionCallUp, intersectionOptions);

const up = document.querySelectorAll('.js-animate-up');
    up.forEach((e) => {
    observerUp.observe(e);
});

function intersectionCallUp(entries, observerUp) {
entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.4) {
    entry.target.classList.add('js-animate-up-init');
    }
});
}

const observerRight = new IntersectionObserver(intersectionCallRight, intersectionOptions);

const right = document.querySelectorAll('.js-animate-right');
    right.forEach((e) => {
    observerRight.observe(e);
});

function intersectionCallRight(entries, observerRight) {
entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.4) {
    entry.target.classList.add('js-animate-right-init');
    }
});
}

const observerLeft = new IntersectionObserver(intersectionCallLeft, intersectionOptions);

const left = document.querySelectorAll('.js-animate-left');
    left.forEach((e) => {
    observerLeft.observe(e);
});

function intersectionCallLeft(entries, observerLeft) {
entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.4) {
    entry.target.classList.add('js-animate-left-init');
    }
});
}