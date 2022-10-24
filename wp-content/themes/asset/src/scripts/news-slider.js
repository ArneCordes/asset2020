import $ from 'jquery';
import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';
import 'swiper/css';
// import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

$(function() {
  $('.news-slider').each(function() {
    var $slider = $(this);
    var $swiperEl = $(this).find('.swiper');
    var swiper = new Swiper($swiperEl.get(0), {
      modules: [Navigation, Pagination, EffectFade],
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      speed: 1000,
      navigation: {
        nextEl: $slider.find('.swiper-button-next').get(0),
        prevEl: $slider.find('.swiper-button-prev').get(0)
      },
      pagination: {
        el: $slider.find('.swiper-pagination').get(0),
        clickable: true
      }
    });
  });
});
