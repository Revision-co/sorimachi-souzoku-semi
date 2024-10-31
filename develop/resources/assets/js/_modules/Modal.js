class Modal {
  constructor(el,opt){
    this.el = el;
    this.event();
    if($("." + this.el).length > 0){
      this.event();
    }
  }
  event(){
    $("." + this.el).on('click', function(e) {
      e.preventDefault();
      $(`[data-id='${$(this).attr('id')}']`).addClass('is-active');
      scrollBan();
    })

    $("." + this.el + "-close").on('click', function() {
      $('.js-modal-container').removeClass('is-active');
      scrollBan();
    })
  }
}