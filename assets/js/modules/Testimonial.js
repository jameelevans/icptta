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
      arrows: false,
      dots: false,
      infinite: true
    });
  }
}

export default Testimonial;