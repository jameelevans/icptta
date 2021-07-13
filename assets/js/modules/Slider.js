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
      infinite: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 800,
          settings: {
            dots: false,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  }
}

export default Slider;
