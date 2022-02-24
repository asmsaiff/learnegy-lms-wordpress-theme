// (function($) {
   
// })(jQuery);


// back-to-top 
myButton = document.getElementById("myBtn");

window.onscroll = function() {educare_scrollFunction();};

function educare_scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      myButton.style.display = "block";
  } else {
      myButton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}