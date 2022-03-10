$(document).ready(function () {
  /*----------- Navbar Shrink ------------*/
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 90) {
      $(".navbar").addClass("navbar-shrink");
    } else {
      $(".navbar").removeClass("navbar-shrink");
    }
  });

  /*----------- Page Scrolling - ScrollIt ---------*/
  $.scrollIt({
    topOffset: -150,
  });

  /*----------- Header Carousel ------------*/
  $(".header-carousel").owlCarousel({
    loop: true,
    dots: false,
    margin: 0,
    responsiveClass: true,
    autoplayTimeout: 3000,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  /*----------- Berita Carousel ------------*/
  $(".kabar-carousel").owlCarousel({
    dots: false,
    loop: false,
    margin: 0,
    responsiveClass: true,
    autoplay: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /*----------- Beli Carousel ------------*/
  $(".beli-carousel").owlCarousel({
    dots: false,
    loop: false,
    margin: 0,
    responsiveClass: true,
    autoplay: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  /*----------- Carousel Custom ------------*/
  var owl = $(".owl-carousel");
  owl.owlCarousel();

  $(".next-btn").click(function () {
    owl.trigger("next.owl.carousel");
  });

  $(".previous-btn").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });
});

// Counter Script
const counters = document.querySelectorAll(".text-item-1");
counters.forEach((textitem1) => {
  textitem1.innerText = "0";

  const updateCounter = () => {
    const target = +textitem1.getAttribute("data-target");
    const c = +textitem1.innerText;
    const increment = target / 1000;
    if (c < target) {
      textitem1.innerText = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 1);
    } else {
      textitem1.innerText = target;
    }
  };
  updateCounter();
});
