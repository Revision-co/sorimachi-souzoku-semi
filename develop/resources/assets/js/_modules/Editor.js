class Editor {
  constructor(el,opt){
    this.el = el;
    if($("." + this.el).length > 0){
      this.event();
    }
  }
  event(){
    //------- サイドナビ アンカー ---------
    let options = {
      threshold: [0],
      rootMargin: '-49.9%',
    }
    const observerEnter = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        const item = entry.target;
        if(entry.intersectionRatio > 0){
          $(`.js-sideNav [href="#${$(item).attr('id')}"]`).siblings().removeClass('is-active')
          $(`.js-sideNav [href="#${$(item).attr('id')}"]`).addClass('is-active')
        } else {
          $(`.js-sideNav [href="#${$(item).attr('id')}"]`).removeClass('is-active')
        }
      })
    }, options)

    const anchorEl = document.querySelectorAll('[id*="anchor"]')
    anchorEl.forEach((e)=>{
      observerEnter.observe(e)
    })

    
    $('[id*="anchor"]').each(function() {
      let text = $(this).find('.anchorTitle').text();
      let id = $(this).attr('id');
      if(text) {
        let newElement = $(`<a href="#${id}" class="c-transition"><hr class="c-transition">${text}</a>`);
        $('.js-sideNav').append(newElement);
      }
    })

    $(".js-sideNav a").click(function() {
      setTimeout(() => {
        $(this).siblings().removeClass('is-active')
        $(this).addClass('is-active')
      }, 600)
    })


    //------- 〆サイドナビ アンカー ---------

    //------- 画像のheught,widthをrem化 ---------
    $('.text-editor img').each(function(index, el) {
      let width = $(el).attr('width')
      // $(el).attr('width')
      $(el).css({'width': `${width * 0.1 + 'rem'}`, 'height': `auto`})
    })
    //------- 画像のheught,widthをrem化 〆 ---------

    //------- アコーディオン ---------
    $('.js-editor-accordion .inner').css({'display': 'none'})

    $('.js-editor-accordion .trigger').on('click', function() {
      $(this).find('.trigger-icon').toggleClass('is-active')
      $(this).next().slideToggle(Number($('html').data('transition')))
    })
    //------- アコーディオン 〆 ---------

    //------- タブ切り替え ---------
    if($(window).innerWidth() >= '769') {

      //------- PCの場合 ---------
      $('.js-tab .inner > div > div:nth-of-type(n + 2)').css({'display': 'none'})
      $('.js-tab .trigger .elementor-element:nth-of-type(1)').addClass('is-active')
  
      $('.js-tab .trigger .elementor-element').on('click', function() {
        $(this).siblings().removeClass('is-active')
        $(this).addClass('is-active')
        $(this).closest('.js-tab').find('.inner-child').css({'display': 'none'})
        $(this).closest('.js-tab').find('.inner-child').eq($(this).index()).fadeIn(Number($('html').data('transition')))
      })
      //------- PCの場合 〆 ---------

    } else {

      //------- SPの場合 ---------
      $('.js-tab').each(function() {
        const _el = $(this)
        const trigger_child = _el.find('.trigger-child')
        _el.find('.inner-child').each(function(index) {
          $(this).before(trigger_child[index])
        })
      })

      $('<span></span>').appendTo('.trigger-child > div')

      $('.inner-child').css({'display': 'none'})
      $('.trigger-child').click(function() {
        $(this).find('span').toggleClass('is-active')
        $(this).next().slideToggle(Number($('html').data('transition')))
      })
      //------- SPの場合 〆 ---------
      
    }
    //------- タブ切り替え 〆 ---------
  }
}