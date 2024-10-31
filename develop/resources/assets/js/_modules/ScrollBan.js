// -------------------------------------------------
// スクロール禁止
// -------------------------------------------------
let scrollTop = 0;

function scrollBan() {
  const body = $('html')[0];
  if (body.classList.contains('is-hidden')) {
    // スクロール開放
    body.style.top = '';
    body.classList.remove('is-hidden');
    window.scrollTo(0, scrollTop);
  } else {
    // スクロール禁止
    scrollTop = window.scrollY;
    body.style.top = (scrollTop * -1) + 'px';
    body.classList.add('is-hidden');
  }
}