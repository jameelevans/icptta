// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';


// Our modules/ classes
import Slider from './modules/Slider'; 
import Testimonial from './modules/Testimonial'; 
//import Partners from './modules/Partners'; Uncomment if slider is needed in future
//import RevealOnScroll from './modules/RevealOnScroll';
import BackTop from './modules/BackTop';



//new RevealOnScroll(document.querySelectorAll(".partners__wrapper"), 85);
//new RevealOnScroll(document.querySelectorAll(".testimonial"), 75);
//new RevealOnScroll(document.querySelectorAll(".home-resources__header"), 85);
//new RevealOnScroll(document.querySelectorAll(".home-resources__wrapper"), 75);
//new RevealOnScroll(document.querySelectorAll(".footer__top"), 85);

// Instantiate a new object using our modules/classes
let slider = new Slider();
let testimonial = new Testimonial();
//let partner = new Partners(); Uncomment if slider is needed in future
let backTop = new BackTop();

