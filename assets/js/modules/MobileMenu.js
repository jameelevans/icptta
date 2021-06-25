


class MobileMenu {
  constructor() {

    this.openButton = document.querySelector(".header__icon");
    this.nav = document.querySelector(".nav");
    this.events();
  }


  events() {
    this.openButton.addEventListener("click", ()=> this.toggleTheMenu());
  }

  toggleTheMenu() {
   
    this.nav.classList.toggle("nav--is-visible");
    this.openButton.classList.toggle("header__icon--close-x");
  }



}

export default MobileMenu;