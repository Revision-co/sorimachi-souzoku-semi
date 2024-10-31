//=include _pages/*
//=include _modules/*

(() => {

})();

//DOMContentLoaded
$(() => {
});

//images resources loaded
$(window).on('load', () => {

  $(window).trigger('loading');
});

//after loading animation
$(window).on('loading', () => {
  let imgParallax = new ImgParallax('js-parallax');
  let inviewEvent = new InviewEvent('js-inview');
  
  // ------------------------------
  // ページビルダー用
  // ------------------------------
  let modal = new Modal('js-modal');
  let accordion = new Accordion('js-accordion');
  let editor = new Editor('c-content');
});

(function() {
  "use strict";

  var desvg = function(selector, removeInlineCss) {
      removeInlineCss = removeInlineCss || false;

      var images,
          imagesLength,
          sortImages = {},

          // load svg file
          loadSvg = function (imgURL, replaceImages) {
              // set up the AJAX request
              var xhr = new XMLHttpRequest();
              xhr.open('GET', imgURL, true);

              xhr.onload = function() {
                  var xml,
                      svg,
                      paths,
                      replaceImagesLength;

                  // get the response in XML format
                  xml = xhr.responseXML;
                  replaceImagesLength = replaceImages.length;

                  // bail if no XML
                  if (!xml) {
                      return;
                  }

                  // this will be the <svg />
                  svg = xml.documentElement;

                  // get all the SVG paths
                  paths = svg.querySelectorAll('path');

                  if (removeInlineCss) {
                      // if `removeInlineCss` is true then remove the style attributes from the SVG paths
                      for (var i = 0; i < paths.length; i++) {
                          paths[i].removeAttribute('style');
                      }
                  }
                  svg.removeAttribute('xmlns:a');

                  while(replaceImagesLength--) {
                      replaceImgWithSvg(replaceImages[replaceImagesLength], svg.cloneNode(true));
                  }
              };

              xhr.send();
          },

          // replace the original <img /> with the new <svg />
          replaceImgWithSvg = function (img, svg) {
              var imgID = img.id,
                  imgClasses = img.getAttribute('class');

              if (imgID) {
                  // re-assign the ID attribute from the <img />
                  svg.id = imgID;
              }

              if (imgClasses) {
                  // re-assign the class attribute from the <img />
                  svg.setAttribute('class', imgClasses + ' replaced-svg');
              }

              img.parentNode.replaceChild(svg, img);
          };



      // grab all the elements from the document matching the passed in selector
      images = document.querySelectorAll(selector);
      imagesLength = images.length;

      // sort images array by image url
      while (imagesLength--) {
          var _img = images[imagesLength],
            _imgURL;

          if (_img.getAttribute('data-src')) {
            _imgURL = _img.getAttribute('data-src')
          } else {
            _imgURL = _img.getAttribute('src')
          }

          if (sortImages[_imgURL]) {
              sortImages[_imgURL].push(_img);
          } else {
              sortImages[_imgURL] = [_img];
          }
      }

      // loops over the matched urls
      for (var key in sortImages) {
          if (sortImages.hasOwnProperty(key)) {
              loadSvg(key, sortImages[key]);
          }
      }

  };

  window.deSVG = desvg;
})();



(function() {

  window.addEventListener('load', function(){	deSVG('.svg', true) });

}());

$(document).ready(function() {
  $(".js-toggle").on("click", function() {
    $(".p-drawer__submenu-list li:not(:first-child").slideToggle();
    $(".p-drawer__submenu-list li:first-of-type").toggleClass("open");
  });

  $(".js-drawer").on("click", function() {
    $(".p-drawer").addClass("js-open");
  });

  $(".p-drawer__button").on("click", function() {
    $(".p-drawer").removeClass("js-open");
  });
});

// ========================================
// ヘッダー スクロール
// ========================================
if(!$('is-scroll')) {
  $(window).on('scroll', function () {
    if ($('.l-fv').height() < $(this).scrollTop()) {
        $('.js-header').addClass('change-color is-scroll');
    } else {
        $('.js-header').removeClass('change-color is-scroll');
    }
  });
}


// ========================================
// GSAP
// ========================================
gsap.fromTo(".js-walk", {
  x: 15,
  y: 10,
}, {
  x: 0,
  y: 0,
  delay: 1,
  stagger: {
    each: 0.7,
  },
  scrollTrigger: {
    trigger: ".p-fv__bg-road .p-fv__bg-people",
    start: "top 70%",
  },
}
);
gsap.utils.toArray(".js-slideUp").forEach((target) => {
gsap.fromTo(target, {
    y: 20,
    autoAlpha: 0,
  }, {
    y: 0,
    autoAlpha: 1,
    scrollTrigger: {
      trigger: target,
      start: "top 80%",
    },
  }
);
});
gsap.utils.toArray(".js-titleUp").forEach((target) => {
gsap.fromTo(target, {
  y: 10,
  autoAlpha: 0,
}, {
  y: 0,
  autoAlpha: 1,
  scrollTrigger: {
    trigger: target,
    start: "top 95%",
  },
});
});
gsap.fromTo(".js-fvTitle", {
y:20,
autoAlpha: 0,
}, {
  y: 0,
  autoAlpha: 1,
  delay: 0.2,
}
);