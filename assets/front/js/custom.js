
    // AOS
    AOS.init({
      duration: 1200,
      once: true,
      disable: 'mobile'
  });




// header

window.onscroll = function() {
  myFunction()
};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >=120) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


// after-slider

$('.banner-slider').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:700,
  // margin: 30,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:1,
          nav:false
      },
      1000:{
          items:1,
          nav:false,
          loop:true
      }
  }
})

$('.banner-similar').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:700,
  margin: 30,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:4,
          nav:false,
          loop:true
      }
  }
})

// blog-slider

$('.blog').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:700,
  margin: 30,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:false,
          loop:true
      }
  }
})

// clieent

$('.testimonaiol').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:700,
  margin: 30,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:false,
          loop:true
      }
  }
})


// gallery-slider

$('.gallery-slider').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:700,
  margin: 40,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:false,
          loop:true
      }
  }
})





// Gallery image hover
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);
// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-close"></i></div>');

$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

$overlay.hide();

$(".img-overlay").click(function(event) {
  event.preventDefault();
  var imageLocation = $(this).prev().attr("href");
  $image.attr("src", imageLocation);
  $overlay.fadeIn("slow");
});

$overlay.click(function() {
  $(this).fadeOut("slow");
});

$nextButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  var $images = $("#image-gallery img");
  if ($nextImg.length > 0) { 
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  event.stopPropagation();
});

$prevButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  event.stopPropagation();
});

$exitButton.click(function() {
  $("#overlay").fadeOut("slow");
});

// count

let count = document.querySelectorAll(".count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},1)

})