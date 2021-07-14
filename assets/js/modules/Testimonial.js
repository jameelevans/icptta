import $ from 'jquery';

class Testimonial {
  constructor() {
    this.els = $(".testimonial");
    this.initSlider();
  }

  initSlider() {
    this.els.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 8000,
      arrows: false,
      dots: false,
      infinite: true,
      adaptiveHeight: true
    });
  }
}

export default Testimonial;