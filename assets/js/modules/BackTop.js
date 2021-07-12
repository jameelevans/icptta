
import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/noframework.waypoints';

class BackTop {
  constructor(){
    this.lazyImages = $(".lazyload");
    this.backTopBtn = $(".back-top__button");
    this.navBtn = $(".mobile-nav__button");
    this.navBack = $(".mobile-nav__background");
    this.triggerElement = $(".main");
    this.triggerMenuElement = $(".header__menu");
    this.createOptionsWaypoint();
    this.createMenuWaypoint();
    this.refreshWaypoints();
  }

  refreshWaypoints() {
    this.lazyImages.on('load', function() {
      Waypoint.refreshAll();
    });
  }


  createOptionsWaypoint() {
    var that = this;
    new Waypoint({
      element: this.triggerElement[0],
      handler: function(direction) {
        if (direction == "down"){
          that.backTopBtn.addClass("back-top__button--is-visible");
        }else{
          that.backTopBtn.removeClass("back-top__button--is-visible");
        }
      }
    })
  }

  createMenuWaypoint() {
    var that = this;
    new Waypoint({
      element: this.triggerMenuElement[0],
      handler: function(direction) {
        if (direction == "down"){
          that.navBtn.addClass("mobile-nav__button--is-scrolled");
          that.navBack.addClass("mobile-nav__background--is-scrolled");
        }else{
          that.navBtn.removeClass("mobile-nav__button--is-scrolled");
          that.navBack.removeClass("mobile-nav__background--is-scrolled");
        }
      }
    })
  }
}

export default BackTop;