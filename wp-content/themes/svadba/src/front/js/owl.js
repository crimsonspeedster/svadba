

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    dots: false,
    nav: false,
    responsive: {
        0:{
            items:1
        },
        790:{
            items:3
        },
        1000:{
            items:1,
            center:true
            // margin:50,
        }
    }
  })

  
let UpdateSliderName = function(){ 
        let SliderName =  document.querySelector(".owl-item.active  .slideName");
        let placeForName = document.querySelector(".small-gold");
        placeForName.innerHTML = SliderName.textContent;

          if (SliderName.getAttribute('data-link')) {
              placeForName.setAttribute('href', SliderName.getAttribute('data-link'));
            }

};

UpdateSliderName();

      let owl = $(".owl-carousel");
      owl.owlCarousel();
      $(".next-btn").click(function () {
          owl.trigger("next.owl.carousel");
          UpdateSliderName();        


      });
      $(".prev-btn").click(function () {
          owl.trigger("prev.owl.carousel");

          UpdateSliderName();

      });
      $(".prev-btn").addClass("disabled");
      $(owl).on("translated.owl.carousel", function (event) {
          if ($(".owl-prev").hasClass("disabled")) {
              $(".prev-btn").addClass("disabled");
          
          } else {
              $(".prev-btn").removeClass("disabled");

          }
          if ($(".owl-next").hasClass("disabled")) {
              $(".next-btn").addClass("disabled");

          } else {
              $(".next-btn").removeClass("disabled");
          }
      });
      $(owl).on('translated.owl.carousel',  function(){ 
                    let SliderName =  document.querySelector(".owl-item.active  .slideName");
                    let placeForName = document.querySelector(".small-gold");
                    placeForName.innerHTML = SliderName.textContent;

                    if (SliderName.getAttribute('data-link')) {
                        placeForName.setAttribute('href', SliderName.getAttribute('data-link'));
                        }

            });
