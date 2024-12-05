jQuery(document).ready(function () {
  var pagetop = jQuery('.pagetop');
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    jQuery('body, html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});
//スムーズスクロール
jQuery(function () {
  jQuery('a[href^="#"]').click(function () {
    var speed = 500;
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});
if (jQuery('.mw_wp_form .error')[0]) {
  var targets = jQuery('.mw_wp_form .error');
  targets.each(function (i) {
    var position = jQuery(this).parent().offset().top;
    jQuery('body,html').delay(200).animate({
      scrollTop: position
    }, 600, 'swing');
    return false;
  });
}
jQuery(window).on('load', function () {
  var headerHeight = 140;
  var url = jQuery(location).attr('href');
  if (url.indexOf("?id=") != -1) {
    var id = url.split("?id=");
    var $target = jQuery('#' + id[id.length - 1]);
    if ($target.length) {
      var pos = $target.offset().top - headerHeight;
      jQuery("html, body").animate({
        scrollTop: pos
      }, 600);
    }
  }
});

jQuery(window).on('load', function () {
const swiper = new Swiper(".swiper", {
  loop: true, // ループ
  speed: 1500, // 少しゆっくり(デフォルトは300)
  spaceBetween: 30, // スライド間の距離
  centeredSlides: true, // アクティブなスライドを中央にする
	slidesPerView: 2,
  autoplay: {
    // 自動再生
    delay: 3000, // 1秒後に次のスライド
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
  },
breakpoints: {
    768: {
 slidesPerView: 4.5,
    },
  },
});
	});


  jQuery(window).on('load', function () {
    const swiper = new Swiper(".live2d-swiper", {
      loop: true, // ループ
      speed: 1000, // 少しゆっくり(デフォルトは300)
      spaceBetween: 30, // スライド間の距離
      centeredSlides: true, // アクティブなスライドを中央にする
      slidesPerView: 2,
      autoplay: {
        // 自動再生
        delay: 2000, // 1秒後に次のスライド
        disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
      },
    breakpoints: {
        768: {
     slidesPerView: 4.5,
        },
      },
    });
      });