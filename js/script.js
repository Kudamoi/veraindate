$(document).ready(function () {
  var swiper = new Swiper(".banner-slider-container", {
    slidesPerView: 1,
    loop: true
  });
  var swiper = new Swiper(".member-slider-container", {
    slidesPerView: getCount(),
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


})

function getCount() {
  var windowWidth = window.innerWidth;
  if (window.innerWidth > 991) {
    var count = 6
  } else {
    if (window.innerWidth > 576) {
      var count = 4
    } else {
      var count = 2
    }
  }
  return count;
}


/*
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }*/