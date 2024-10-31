// ------------------------------------------
// imgタグに「js-parallax」クラス、そのimgタグに要素をラップしてheightを指定すると、画像がはみ出た分が動く
// 「data-scrub」属性に数字を入れると、動きの滑らかさが変わる
// ------------------------------------------
class ImgParallax {
  constructor(el,opt){
    this.el = el;
    if($("." + this.el).length > 0){
      this.event();
    }
  }
  event(){
    let cls = this.el;
    let para_ele = document.querySelectorAll("." + this.el);
    para_ele.forEach((ele, index)=> {
      let property,scrub;

      $(ele).css({
        'object-fit':'cover',
        'object-position':'50% 0%',
        'width':'100%',
        'height':'100%',
      })

      property = '50% 100%';
      scrub = $(ele).data('scrub') ? $(ele).data('scrub') : 3;

      ele.classList.add(cls + index);
      gsap.to('.' + cls + index, {
        objectPosition: property,
        scrollTrigger: {
          trigger: '.' + cls + index, // 要素がビューポートに入ったときにアニメーション開始
          start: 'top bottom',
          end: 'bottom top',
          scrub: scrub,
          merker: true,
        }
      })
    })
  }
}
