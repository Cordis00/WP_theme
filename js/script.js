var search_btn = document.getElementById('btn_search');
var search_form = document.getElementById('search_bar_form');
var nav_btn = document.getElementById('btn_nav');
var menu_form = document.getElementById('nav_modal_menu');

$(window).resize(function () {
  var width = $('body').innerWidth()
  if (width > 442) {
    search_form.style.display = 'none';
  }
});

btn_search.addEventListener('click', fun1);
btn_nav.addEventListener('click', fun2);

function fun1() {
  if(search_form.style.display == 'none') {
    search_form.style.display = 'block';
  }else {
    search_form.style.display = 'none';
  }
}
function fun2() {
  if(menu_form.style.display == 'none') {
    menu_form.style.display = 'block';
  }else {
    menu_form.style.display = 'none';
  }
}

var hammer = new Hammer(document.querySelector('.carousel'));
var $carousel = $(".carousel").carousel({"interval":0});
hammer.get("swipe");
hammer.on("swipeleft", function(){
    $carousel.carousel("next");
});
hammer.on("swiperight", function(){
    $carousel.carousel("prev");
});
