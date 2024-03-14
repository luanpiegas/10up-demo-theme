// https://unpkg.co/gsap@3/dist/gsap.min.js

document.addEventListener('DOMContentLoaded', () => {

    const arrow = document.querySelector('#arrow');
    const logo = document.querySelector('#logo');
    const lines = document.querySelectorAll('.loading ul li');

    const tl = gsap.timeline({
        defaults: {

        }
    });

    tl.fromTo(arrow, {
        y: 10000,
        opacity: 1
    }, {
        y: -1000,
        duration: 1.5,
        onComplete: () => {
            gsap.to(arrow, {
                y: '-100%',
                onComplete: () => {
                    gsap.to('.loading', {
                        y: -1010,
                    })
                }
            })
            
            
        }
    });

    gsap.utils.toArray(lines).forEach((li, i) => {
        gsap.fromTo(li, {
            opacity: 1,
            y: -1000
        }, {
            opacity: 0,
            y: 1000,
            duration: 0.5,
            delay: i * 0.05
        })
    })
})
