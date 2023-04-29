const sliderItems = document.querySelectorAll('.slider-item-name');
const card = document.querySelectorAll('.item-card');
const sectionBanner = document.querySelector('.section-banner');
const menuMainItems = document.querySelectorAll('.header-menu .menu-item a');
const cardTitleItems = document.querySelectorAll('.section-cards .card-title');
const socialMedia = document.querySelectorAll('.social-media .menu-item a');
const subtitleTeg = document.querySelector('.subtitle');
const subTitleArr = JSON.parse(subTitles);
const subTitleArrForAnimation = subTitleArr.map(item => item.subtitle);
const preloaderBlock = document.querySelector('.preloader');
const page = document.querySelector('.page');
const sectionAnimation = document.querySelector(".section-animation");
const sectionNumbersNumber = document.querySelectorAll('.section-numbers__number');
const linkContactPhrase = document.querySelector('.section-contact__phrase a');
const linkContactPhraseContent = linkContactPhrase.innerHTML;
const linkContactPhraseLink = linkContactPhrase.getAttribute('href');
const teamItemContainer = document.querySelectorAll('.container');
const frontCube = document.querySelectorAll('.front-cube');
const backCube = document.querySelectorAll('.back-cube');
const leftCube = document.querySelectorAll('.left-cube');
const rightCube = document.querySelectorAll('.right-cube');
const bottomCube = document.querySelectorAll('.bottom-cube');
const topCube = document.querySelectorAll('.top-cube');
const cubeItem = document.querySelectorAll('.cube');
const cursorFollowArr = document.querySelectorAll('.cursor-follow-item');
const cursorWrapper = document.querySelector('.cursor-follow');
const speedSlider = 1;
let scrollCount = 0;
let isScrolling;
let scrollpos = window.scrollY;
let teamItemWidth;
let positionCursor = { x: 0, y: 0 };
let positionMouse = { x: 0, y: 0 };

// preloader

if(preloaderBlock) { 
    document.addEventListener("DOMContentLoaded", ()=> {
        preloaderBlock.classList.add('preloader-start');
        setTimeout(()=>{
            page.classList.add('visible');
            preloaderBlock.classList.add('preloader-close');
        }, 2700);
    });
}

// animation wave

function animationWave(arr) {
    arr.forEach(function(el){
        let item = el.innerHTML;
        let itemInSpan = item.split('').reduce( (res, char, index) => `${res}<span style="--index: ` + `${index}` +`">${char}</span>`, '')
    
        el.innerHTML = `
        <div class="animation-wrapp-wave">
            <div class="wave-item">`
                + itemInSpan +
            `</div>
            <div class="wave-item-clone">`
                + itemInSpan +
            `</div>
        </div>`;
    })
}

animationWave(menuMainItems);
animationWave(cardTitleItems);
animationWave(socialMedia);

// animation subtitle

class TextScramble {
    constructor(el) {
        this.el = el
        this.chars = '!\\/?#abdehkmnpswxz'
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++) {
            const from = oldText[i] || ''
            const to = newText[i] || ''
            const start = Math.floor(Math.random() * 40)
            const end = start + Math.floor(Math.random() * 40)
            this.queue.push({ from, to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }
    update() {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
                } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += '<span class="dud-text">'+ char +'</span>'
                } else {
                output += from
            }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length) {
            this.resolve()
            } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}

setTimeout(()=>{
    const fx = new TextScramble(subtitleTeg)
    let counter = 0
    const next = () => {
        fx.setText(subTitleArrForAnimation[counter]).then(() => {
            setTimeout(next, 1500)
        })
        counter = (counter + 1) % subTitleArrForAnimation.length
    }
    next()
}, 6000)

//  for video for Mozilla Firefox, Safari

if(navigator.userAgent.indexOf("Safari") != -1 && navigator.userAgent.indexOf("Chrome") === -1) {
    page.classList.add('body-safari');
    console.log("Safari")
} else if(navigator.userAgent.indexOf("Firefox") != -1 ){
    page.classList.add('body-firefox');
}

// orbit animation

let ElementRevolver = (function() {
    
    function getPosition(settings, ellapsedTime) {
        var angle = getAngle(settings, ellapsedTime);
        return {
            x: Math.round(settings.center.x + settings.radius * Math.cos(angle)),
            y: Math.round(settings.center.y + settings.radius * Math.sin(angle))
        };
    }
    
    function getAngle(settings, ellapsedTime) {
        return ellapsedTime / settings.interval * 2 * Math.PI * settings.direction - settings.startPositionRad;
    }
    
    function start(id, settings) {
        var el = document.getElementById(id),
            startTime = (new Date()).getTime(),
            width = el.offsetWidth,
            height = el.offsetHeight;
        if(el['#rev:tm'] !== null) stop(id);
        el.style.position = settings.cssPosition || 'absolute';
        if(!settings.startPositionRad) settings.startPositionRad = settings.startPositionDeg / 180 * Math.PI;
        el['#rev:tm'] = setInterval(function() {
            var pos = getPosition(settings, (new Date()).getTime() - startTime);
            el.style.left = (pos.x - Math.round(width / 2)) + 'px';
            el.style.top = (pos.y - Math.round(height / 2)) + 'px';
        }, settings.updateInterval);
        if(settings.iterations > -1) setTimeout(function() {
            stop(id);
        }, settings.iterations * settings.interval);
    }
    
    function stop(id) {
        var el = document.getElementById(id);
        if(el['#rev:tm'] === null) return;
        clearInterval(el['#rev:tm']);
        el['#rev:tm'] = null;
    }
    
    return {
        start: start,
        stop: stop
    };
    
})();

if (!document.querySelector('body').classList.contains('body-safari')) {
    ElementRevolver.start('circle-about-big', {
        radius: 15,
        center: { x: 150, y: 150 },
        interval: 10000,
        direction: 1,
        iterations: -1,
        startPositionDeg: 90,
        updateInterval: 50
    });

    ElementRevolver.start('circle-about-light', {
        radius: 8,
        center: { x: 150, y: 150 },
        interval: 5000,
        direction: 1,
        iterations: -1,
        startPositionDeg: 90,
        updateInterval: 50
    });

    ElementRevolver.start('banner-light', {
        radius: 20,
        center: { x: 150, y: 150 },
        interval: 12000,
        direction: 1,
        iterations: -1,
        startPositionDeg: 90,
        updateInterval: 50
    });
    
    ElementRevolver.start('contact-light', {
        radius: 20,
        center: { x: 0, y: 0 },
        interval: 9000,
        direction: 1,
        iterations: -1,
        startPositionDeg: 90,
        updateInterval: 50
    });
}

// for splide slide

const splide = new Splide( '.splide', {
    type   : 'loop',
    focus  : 'center',
    gap: 100,
    autoWidth: true,
    arrows: false,
    pagination: false,
    autoScroll: {
        speed: speedSlider,
        pauseOnHover: false,
        pauseOnFocus: false
    },
} );

splide.mount( window.splide.Extensions );

// section numbers
if(sectionNumbersNumber) {

    sectionNumbersNumber.forEach((el)=> {

        let itemInSpan = el.innerHTML.split('').reduce( (res, char, index) => `${res}<span style="animation-delay: ${1 + index / 3}s;">${char}</span>`, '');
        el.innerHTML = itemInSpan;
    })

}

// section team cards

if(teamItemContainer) {
    teamItemContainer.forEach((el)=> {
        teamItemWidth = el.offsetWidth;

        el.style.height = teamItemWidth +'px';
    })

    let teamItemWidthHalf = teamItemWidth / 2;

    let rotationOption = {
        toLeft: 'rotateY(90deg)',
        toRight: 'rotateY(-90deg)',
        toTop: 'rotateX(-90deg)',
        toBottom: 'rotateX(90deg)'
    }

    let arr = ['rotateY(90deg)', 'rotateY(-90deg)', 'rotateX(-90deg)', 'rotateX(90deg)'];

    function arrayRandElement(arr) {
        let random = Math.floor(Math.random() * arr.length);
        return arr[random];
    }

    cubeItem.forEach((el)=> {

        el.style.transform = `translateZ(-${teamItemWidthHalf}px) rotateY(0deg)`;

        el.addEventListener('click', ()=> {
            if (el.style.transform == `translateZ(-${teamItemWidthHalf}px) rotateY(0deg)`) {
                el.style.transform = `translateZ(-${teamItemWidth}px) ${arrayRandElement(arr)}`;
            } else {
                el.style.transform = `translateZ(-${teamItemWidthHalf}px) rotateY(0deg)`;
            }
        })
    })

    frontCube.forEach((el)=> {
        el.style.transform = `translateZ(${teamItemWidthHalf}px)`;
    })

    backCube.forEach((el)=> {
        el.style.transform = `translateZ(-${teamItemWidthHalf}px) rotateY(-180deg)`;
    })

    topCube.forEach((el)=> {
        el.style.transform = `translateY(-${teamItemWidthHalf}px) rotateX(90deg)`;
    })

    bottomCube.forEach((el)=> {
        el.style.transform = `translateY(${teamItemWidthHalf}px) rotateX(90deg)`;
    })

    leftCube.forEach((el)=> {
        el.style.transform = `translateX(-${teamItemWidthHalf}px) rotateY(-90deg)`;
    })

    rightCube.forEach((el)=> {
        el.style.transform = `translateX(${teamItemWidthHalf}px) rotateY(90deg)`;
    })
}

// magnetic-btn

if(linkContactPhrase) {

    linkContactPhrase.innerHTML = `
        <span class="container container-link">
            <span class="magnetic magnetic-link">
                <span class="btn btn-outline-primary magnet-button">${linkContactPhraseContent}
                </span>
            </span>
        </span>`;

    let magnets = document.querySelectorAll('.magnetic')
    let strength = 50

    if(magnets){
        magnets.forEach( (magnet) => {
    magnet.addEventListener('mousemove', moveMagnet );
    magnet.addEventListener('mouseout', function(event) {
        TweenMax.to( event.currentTarget, 1, {x: 0, y: 0, ease: Power4.easeOut})
    } );
        });

        function moveMagnet(event) {
        var magnetButton = event.currentTarget
        var bounding = magnetButton.getBoundingClientRect()

        TweenMax.to( magnetButton, 1, {
            x: ((( event.clientX - bounding.left)/magnetButton.offsetWidth) - 0.5) * strength,
            y: ((( event.clientY - bounding.top)/magnetButton.offsetHeight) - 0.5) * strength,
            ease: Power4.easeOut
        })
        }
    }
}

function upSpeedSlider() {
    scrollCount += 0.05;
        splide.options = {
            autoScroll: {
                speed: speedSlider + scrollCount <= 5 ? speedSlider + scrollCount : 5,
            }
        };

    window.clearTimeout( isScrolling );

    isScrolling = setTimeout(function() {

        splide.options = {
            autoScroll: {
                speed: speedSlider,
            }
        };

    }, 66);
}
// ScrollMagic
function sliderSpeedOnScroll() {
    window.addEventListener('scroll', upSpeedSlider, false)
}

function defaultSpeedScrollSlider() {
    window.removeEventListener('scroll', upSpeedSlider, false)
}

// let controller = new ScrollMagic.Controller({addIndicators: true});
let controller = new ScrollMagic.Controller();

let sectionSlider = new ScrollMagic.Scene({triggerElement: "#section-slider", duration: 1000, triggerHook: "onLeave", triggerHook: 1})
// .addIndicators({name: "6 - section-slider"})
.on('enter', sliderSpeedOnScroll)
.on('leave', defaultSpeedScrollSlider)
.addTo(controller)
.reverse(true);

sectionSlider
let sectionAbout = new ScrollMagic.Scene({triggerElement: "#section-about", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-about", "section-about-animation")
// .addIndicators({name: "1 - section-about"}) 
.addTo(controller)
.reverse(false);

let sectionCards = new ScrollMagic.Scene({triggerElement: "#section-cards", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-cards", "section-cards-animation")
// .addIndicators({name: "1 - section-cards"}) 
.addTo(controller)
.reverse(false);

let sectionOffers = new ScrollMagic.Scene({triggerElement: "#section-offers", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-offers", "section-offers-animation")
// .addIndicators({name: "2 - section-offers"}) 
.addTo(controller)
.reverse(false);

let sectionNumbers = new ScrollMagic.Scene({triggerElement: "#section-numbers", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-numbers", "section-numbers-animation")
// .addIndicators({name: "4 - section-numbers"}) 
.addTo(controller)
.reverse(false);

let sectionTeam = new ScrollMagic.Scene({triggerElement: "#section-team", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-team", "section-team-animation")
// .addIndicators({name: "5 - section-team"}) 
.addTo(controller)
.reverse(false);

let sectionContact = new ScrollMagic.Scene({triggerElement: "#section-contact", triggerHook: "onLeave", triggerHook: 0.7})
.setClassToggle(".section-contact", "section-contact-animation")
// .addIndicators({name: "6 - section-contact"}) 
.addTo(controller)
.reverse(false);

let footer = new ScrollMagic.Scene({triggerElement: "#footer", triggerHook: "onLeave", triggerHook: 0.9})
.setClassToggle(".footer", "footer-animation")
// .addIndicators({name: "6 - footer"}) 
.addTo(controller)
.reverse(false);

// cursor follow

// let itemCursorNumber = 10
// let isMouseMove;
// let cursorFollowItems = document.querySelector('.cursor-follow-items');

// if(cursorFollowArr) {
//     document.addEventListener('mousemove', (e) => {
//         positionMouse.x = e.clientX;
//         positionMouse.y = e.clientY;
//         if(!cursorWrapper.classList.contains('show')) {
//             cursorWrapper.classList.add('show');
//         }
//         cursorFollowArr.forEach((el, idx)=> {
//             el.classList.remove(`animation-cursor-${idx+1}`);
//         })

//         window.clearTimeout( isMouseMove );

//         isMouseMove = setTimeout(function() {
  
//                 cursorFollowArr.forEach((el, idx)=> {
//                     if(el.classList.contains(`animation-cursor-${idx+1}`)) return;
//                     el.classList.add(`animation-cursor-${idx+1}`);
//                 })

//         }, 250);
//     });

//     TweenLite.ticker.addEventListener('tick', update);

//     function update() {

//         cursorFollowArr.forEach((el, idx) => {

//             positionCursor.x = (positionMouse.x) - 10;
//             positionCursor.y = (positionMouse.y) - 10;
            
//             el.setAttribute("style", `
//                 top: ${positionCursor.y}px; 
//                 left: ${positionCursor.x}px;
//             `);
//         })
//     }
// }