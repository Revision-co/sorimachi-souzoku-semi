// -------------------------------------------------
// スクロール禁止
// -------------------------------------------------
let scrollTop = 0;

function scrollBanOpen() {
  const body = $('html')[0];
  // スクロール禁止
  scrollTop = window.scrollY;
  body.style.top = (scrollTop * -1) + 'px';
  body.classList.add('is-hidden');
}

function scrollBanClase() {
  const body = $('html')[0];
  // スクロール開放
  body.style.top = '';
  body.classList.remove('is-hidden');
  window.scrollTo(0, scrollTop);
}