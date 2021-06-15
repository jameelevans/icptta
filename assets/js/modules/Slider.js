import $ from 'jquery';

class Slider {
  constructor() {
    this.els = $(".slider");
    this.initSlider();
  }

  initSlider() {
    this.els.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      dots: true,
      infinite: true
    });
  }
}

export default Slider;
