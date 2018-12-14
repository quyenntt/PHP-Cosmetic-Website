//LOGIN AND REGISTER

////////////////////////////
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
//////////////////////

 var slideIndex;
      // funtion show slide
 function showSlides() {
      var i;
      var slides = document.getElementsByClassName("hiddenslide");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //next slide
      slideIndex++;
      // if stay at slide last to slide fist
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      } 
      //after 5s run slide
      setTimeout(showSlides, 5000);  
 }
 function plusSlides(n) {
  showSlides(slideIndex == n);
}

 function currentSlide(n) {
        showSlides(slideIndex = n);
}
// fix slide fist
    showSlides(slideIndex = 0);
///////////
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});