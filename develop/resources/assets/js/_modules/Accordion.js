class Accordion {
  constructor(el,opt){
    this.el = el;
    if($("." + this.el).length > 0){
      this.event();
    }
  }
  event(){
    $('.' + this.el).click(function() {
       $(this).next().slideToggle(Number($('html').data('transition')));
       $(this).toggleClass('is-active');
    })
  }
}