$(document).ready(function(){

    //banner carrousel
    $("#banner-area .owl-carousel").owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });



    //top sale carrousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dotes:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        }
    });

    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dotes:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })



       // product qty section
       let $qty_up = $(".qty .qty-up");
       let $qty_down = $(".qty .qty-down");
   
       // click on qty up button
       $qty_up.click(function(e){
           let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
           if($input.val() >= 1 && $input.val() <= 9){
               $input.val(function(i, oldval){
                   return ++oldval;
               });
           }
       });
   
          // click on qty down button
          $qty_down.click(function(e){
           let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
           if($input.val() > 1 && $input.val() <= 10){
               $input.val(function(i, oldval){
                   return --oldval;
               });
           }
       });

});