import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Register GSAP Plugins
gsap.registerPlugin(ScrollTrigger);

// Initialize Alpine
Alpine.plugin(intersect);
window.Alpine = Alpine;
Alpine.start();

// Expose GSAP to window for use in Blade if needed
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Initialize Swiper Defaults
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

// Common Animations
document.addEventListener('DOMContentLoaded', () => {
    // Fade up animation for sections
    gsap.utils.toArray('.reveal-up').forEach((elem) => {
        gsap.from(elem, {
            scrollTrigger: {
                trigger: elem,
                start: 'top 90%',
                once: true,
            },
            y: 40,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });
    });

    // Staggered fade in for cards - More reliable
    gsap.utils.toArray('.stagger-reveal').forEach((container) => {
        gsap.from(container.children, {
            scrollTrigger: {
                trigger: container,
                start: 'top 90%',
                once: true,
            },
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: {
                amount: 0.6,
                from: "start"
            },
            ease: 'power2.out',
            clearProps: "all" // Ensures opacity stays 1 after animation
        });
    });
});
