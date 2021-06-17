// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';


// Our modules/ classes
import Slider from './modules/Slider'; 
import Testimonial from './modules/Testimonial'; 
import RevealOnScroll from './modules/RevealOnScroll';

new RevealOnScroll(document.querySelectorAll(".partners__wrapper"), 85);
new RevealOnScroll(document.querySelectorAll(".testimonial"), 75);
new RevealOnScroll(document.querySelectorAll(".resources__header"), 85);
new RevealOnScroll(document.querySelectorAll(".resources__wrapper"), 75);
new RevealOnScroll(document.querySelectorAll(".footer__top"), 85);

// Instantiate a new object using our modules/classes
let slider = new Slider();
let testimonial = new Testimonial();
