<section class="slider">
<div class="list">
    <div class="item active">
        <div class="image" style="background-image: url('img/Project/Picture44.jpg');"></div>
        <div class="content">
            <h2 class="text-white">Best Fence Services</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/Frameless_glass_balustrade_on_spiral_stairs.jpg');"></div>
        <div class="content">
            <h2 class="text-white">Modern Stairs</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/rf3.jpg');"></div>
        <div class="content">
            <h2 class="text-white">Modern Living Solutions</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/zse.jpg');"></div>
        <div class="content">
            <h2 class="text-white">The Best Renovation</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/rfde.jpg');"></div>
        <div class="content">
            <h2 class="text-white">Residential</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/flooring.png');"></div>
        <div class="content">
            <h2 class="text-white">Concrete</h2>
        </div>
    </div>
    <div class="item">
        <div class="image" style="background-image: url('img/Project/solar-farm.jpg');"></div>
        <div class="content">
            <h2 class="text-white">Solar Farm</h2>
        </div>
    </div>
</div>

        </div>
        <div class="item">
            <div class="image" style="--url: url('img/Project/CBD-CONTRACTING-UNION-STREET.jpg')"></div>
            <div class="content">
                <h2 class="text-white">Custom Design Solutions</h2>

            </div>
        </div>
        <div class="item">
            <div class="image" style="--url: url('img/Project/septic-tank1.jpg')"></div>
            <div class="content">
                <h2 class="text-white">Septic tanks</h2>

            </div>
        </div>
    </div>
    <div class="arrows">
        <button id="prev">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
        </button>
        <button id="next">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </button>
    </div>
</section>
</main>

<script>
    let items = document.querySelectorAll('.slider .list .item');
    let prevBtn = document.getElementById('prev');
    let nextBtn = document.getElementById('next');
    let lastPosition = items.length - 1;
    let firstPosition = 0;
    let active = 0;
    let autoChange;

    // Function to navigate to the next slide
    nextBtn.onclick = () => {
        active = (active + 1) > lastPosition ? 0 : active + 1; // Loop back to first slide
        setSlider();
        resetAutoChange();
    };

    // Function to navigate to the previous slide
    prevBtn.onclick = () => {
        active = (active - 1) < firstPosition ? lastPosition : active - 1; // Loop back to last slide
        setSlider();
        resetAutoChange();
    };

    // Function to apply active class and update arrow visibility
    const setSlider = () => {
        let oldActive = document.querySelector('.slider .list .item.active');
        if (oldActive) oldActive.classList.remove('active');
        items[active].classList.add('active');
        // Update arrow visibility
        nextBtn.classList.remove('d-none');
        prevBtn.classList.remove('d-none');
    };

    // Function to set auto-change timer
    const startAutoChange = () => {
        autoChange = setInterval(() => {
            active = (active + 1) > lastPosition ? 0 : active + 1;
            setSlider();
        }, 5000); // Change every 5 seconds
    };

    // Reset auto-change timer on manual navigation
    const resetAutoChange = () => {
        clearInterval(autoChange);
        startAutoChange();
    };

    // Set slider and auto-change on load
    setSlider();
    startAutoChange();

    // Set diameter for circular images
    const setDiameter = () => {
        let slider = document.querySelector('.slider');
        let widthSlider = slider.offsetWidth;
        let heightSlider = slider.offsetHeight;
        let diameter = Math.sqrt(Math.pow(widthSlider, 2) + Math.pow(heightSlider, 2));
        document.documentElement.style.setProperty('--diameter', diameter + 'px');
    };
    setDiameter();
    window.addEventListener('resize', () => {
        setDiameter();
    });
</script>
<style>
    @import url('https://fonts.cdnfonts.com/css/bebas-neue');
    @import url('https://fonts.cdnfonts.com/css/poppins');
    /* 1200 x 780 */


    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
    }

    svg {
        color: #fff;
    }

    :root {
        --width-default: min(1200px, 90vw);
        --diameter: 1432px;
    }


    .slider {
        /* background-color: red; */
        color: #eee;
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow: hidden;
        margin-top: -70px;
    }

    .slider .list .item {
        position: absolute;
        inset: 0 0 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 1s;
    }

    .slider .list .item .content {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
        width: max-content;
        max-width: 100%;
        text-align: center;
        display: grid;
        grid-template-columns: repeat(2, 400px);
        text-align: left;
        gap: 80px;
        font-size: 1.2em;
        text-transform: uppercase;
        font-family: Poppins;
        text-shadow: 0 0 80px #000;
    }

    .slider .list .item .content h2 {
        font-size: 10em;
        font-family: 'Bebas Neue', sans-serif;
        line-height: 0.9em;
        transform: translateY(-100%);
        transition: transform 1s;
        grid-row-start: 1;
        grid-row-end: 3;
    }

    .slider .list .item .content p {}

    .slider .list .item .content p:last-child {
        display: flex;
        justify-content: start;
        align-items: end;
        padding-bottom: 25px;
    }

    /* item default */
    .slider .list .item .image {
        flex-shrink: 0;
        width: var(--diameter);
        height: var(--diameter);
        background-image: var(--url);
        background-size: var(--diameter) var(--diameter);
        background-position: center;
        border-radius: 50%;
        transform: rotate(-60deg);
        position: relative;
        transition: 1s;
    }

    .slider .list .item .image::before,
    .slider .list .item .image::after {
        position: absolute;
        width: 70%;
        height: 70%;
        content: '';
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-120deg);
        background-image:
            linear-gradient(to right, #0004, #0004),
            var(--url);
        background-size: var(--diameter) var(--diameter);
        background-position: center;
        transition: 1s;
    }

    .slider .list .item .image::after {
        width: 30%;
        height: 30%;
        background-image: var(--url);
        border: 3px solid #fff2;
        transform: translate(-50%, -50%) rotate(-170deg);
    }

    /* default  */
    .slider .list .item .image {
        filter: blur(30px);
    }

    .slider .list .item {
        pointer-events: none;
        opacity: 0;
    }

    /* item active */
    .slider .list .item.active {
        pointer-events: auto;
        opacity: 1;
    }

    .slider .item.active .image {
        filter: blur(0px);
        transform: rotate(0deg);
    }

    .slider .item.active .image::before,
    .slider .item.active .image::after {
        transform: translate(-50%, -50%) rotate(0deg);
    }

    .slider .list .item.active .content h2 {
        transform: translateY(0);
    }

    /* item phía sau */
    .slider .list .item.active~.item {
        opacity: 0;
    }

    .slider .item.active~.item .image {
        transform: rotate(60deg);
    }

    .slider .item.active~.item .image::before {
        transform: translate(-50%, -50%) rotate(120deg);
    }

    .slider .item.active~.item .image::after {
        transform: translate(-50%, -50%) rotate(170deg);
    }

    .slider .list .item.active~.item .content h2 {
        transform: translateY(100%);
    }

    /* arrows */
    /* Ensure arrows are visible */
    .arrows {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 30px;
        /* Default position for desktop */
        width: var(--width-default);
        display: flex;
        justify-content: space-between;
        z-index: 10;
        /* Ensure arrows are above other elements */
    }

    .arrows button {
        all: unset;
        cursor: pointer;
        opacity: 1;
        /* Ensure visibility */
        pointer-events: auto;
        /* Ensure they are clickable */
        border-radius: 50%;
        /* Circular buttons */
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .arrows button:hover {
        transform: scale(1.1);
        /* Slight zoom on hover */
    }

    .arrows button svg {
        color: #000000;
        /* White arrow icons */
        width: 24px;
        height: 24px;
    }

    /* Ensure arrows are visible and adjusted for mobile */
    @media all and (max-width: 767px) {
        .arrows {
            bottom: 100px;
            /* Move arrows higher on mobile */
        }

        .arrows button {
            width: 40px;
            /* Slightly smaller for mobile */
            height: 300px;
        }
    }


    .slider .list::after {
        position: absolute;
        content: '';
        bottom: 0;
        width: min(1000px, 100vw);
        height: 70%;
        left: 50%;
        transform: translateX(-50%);
        background-image: url(img/model.png);
        background-size: cover;
        background-position: top;
        pointer-events: none;
        animation: showModel 1s ease-in-out 1 forwards;
    }

    @keyframes showModel {
        from {
            transform: translateX(-50%) scale(1.3) translateY(88px);
        }
    }

    /* Show arrows on mobile */
    @media all and (max-width: 767px) {
        .arrows button {
            opacity: 1 !important;
            pointer-events: auto !important;
        }
    }

    @media all and (max-width: 1024px) {
        .slider .list .item .content {
            grid-template-columns: repeat(2, 300px);
        }

        .slider .list .item .content h2 {
            font-size: 8em;
        }
    }

    @media all and (max-width: 767px) {
        .slider .list .item .content {
            grid-template-columns: 80%;
            justify-content: center;
            gap: 20px;
            top: 70px;
        }

        .slider .list .item .content h2 {
            font-size: 4em;
        }

        .slider .list .item .content p {
            font-size: small;
        }
    }
</style>
