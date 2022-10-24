import $ from 'jquery';
import Swiper, { Navigation, Thumbs, EffectFade } from 'swiper';
import 'swiper/css';
import 'swiper/css/effect-fade';

$(function() {
  $('.single-slider').each(function() {
    var $slider = $(this);
    var $swiperEl = $slider.find('.swiper');
    var $thumbSlider = $slider.next('.thumb-slider');

    if($thumbSlider.length > 0) {
      var $thumbSwiperEl = $thumbSlider.find('.swiper');
      var thumbSwiper = new Swiper($thumbSwiperEl.get(0), {
        slidesPerView: 13,
        spaceBetween: 10
      });
    }

    var swiper = new Swiper($swiperEl.get(0), {
      modules: [Navigation, Thumbs, EffectFade],
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      speed: 1000,
      effect: 'fade',
      thumbs: {
        swiper: thumbSwiper
      },
      navigation: {
        nextEl: $slider.find('.swiper-button-next').get(0),
        prevEl: $slider.find('.swiper-button-prev').get(0)
      }
    });
  });
});
