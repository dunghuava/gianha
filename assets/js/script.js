window.onscroll = function() {
	myFunction();
	scrollFunction();
};
var navbar = document.getElementById("flex-navbar");
var sticky = (navbar.offsetTop+55);
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//
function scrollFunction() {
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       document.getElementById("movetop").style.display = "block";
   } else {
       document.getElementById("movetop").style.display = "none";
   }
}
function topFunction() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
}
//
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});

$(document).ready(function() {
  $('.slick-carosel').slick({
    dots: false,
    vertical: true,
    autoplay:true,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    verticalSwiping: false,
  });
});

$(document).ready(function () {
  $('.btn-select-type').click(function (e) { 
    e.preventDefault();
    $('.btn-select-type').css({'background':'#ccccccc2'});
    $(this).css({'background':'#02AD88'});
  });
});