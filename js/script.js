// slickカスタマイズ

$(".slick-youtube").slick({
  slidesToShow: 2,
  arrows: true,
  speed: 1000,
  prevArrow: '<span class="material-symbols-outlined">navigate_before</span>',
  nextArrow: '<span class="material-symbols-outlined">navigate_next</span>',
  appendArrows: $(".arrows"),
  responsive: [
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '10%'
      },
    },
  ],
});