class FormConvert {
  constructor(el,opt){
    this.el = el;
    if($("." + this.el).length > 0){
      this.event();
    }
  }
  event(){
    //全角から半角
    function replaceZtoH(str){
      str = str.replace(/[！-～]/g, function(s){
        return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
      });
      str = str.replace(/[-－﹣−‐⁃‑‒–—﹘―⎯⏤ーｰ─━]/g, '-');
      return str;
    }
    const el = document.querySelector('.js-convert');
    el.addEventListener('blur', () => {
      const br = el.value;
      const ar = replaceZtoH(br);
      el.value = ar;
    });
  }
}
