const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("navMenu");
const closeBtn = document.getElementById("closeBtn");

hamburger.addEventListener("click", () => {
  navMenu.classList.add("open");
});

closeBtn.addEventListener("click", () => {
  navMenu.classList.remove("open");
});



function showOnScroll() {
  $('.js-fade').each(function () {
    const elemTop = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll + windowHeight > elemTop + 50) {
      $(this).css({
        opacity: 1,
        transform: 'translateX(0)',
        transition: 'all 0.8s ease-out'
      });
    }
  });

  $('.js-slide-right').each(function () {
    const elemTop = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll + windowHeight > elemTop + 50) {
      $(this).css({
        opacity: 1,
        transform: 'translateX(0)',
        transition: 'all 0.8s ease-out'
      });
    }
  });
}

window.addEventListener('DOMContentLoaded', function () {
  const preloader = document.getElementById('preloader');
  const mainContent = document.getElementById('mainContent');
  const video = document.getElementById('loadingVideo');

  const showMainContent = () => {
    preloader.style.display = 'none';
    mainContent.style.display = 'block';
    document.body.style.overflow = 'auto';

    setTimeout(() => {
      showOnScroll();
    }, 100);
    setTimeout(() => {
      showOnScroll();
    }, 500);

    window.addEventListener('scroll', showOnScroll);
  };

  video.addEventListener('ended', showMainContent);

  setTimeout(() => {
    if (preloader.style.display !== 'none') {
      showMainContent();
    }
  }, 5000);
});