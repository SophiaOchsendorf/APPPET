$(document).ready(function() {

    // Add smooth scrolling to all links in navbar + footer link

    $(".navbar a, footer a[href='#topo']").on('click', function(event) {

        //Make sure this.hash has a value before overriding defalt behavior

        if (this.hash !== ""){

            //Prevent defalt anchor click behavior

            event.preventDefault();

            //Store hash

            var hash = this.hash;

            //Using jQuery's animate() method to add smooth page scroll
            //the optional number (900) specifies the number of milliseconds it takes to scroll to the specified area

            $('html, body').animate({
                scrollTop: $(hash).offfset().top
            }, 900, function(){

                //Add hash (#) to URL when done scrolling (defalt click behavior)

                window.location.hash = hash;
            });
        } // End if
    })


  $(window).scroll(function(){
    $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600)  {
            $(this).addclass("slide");
        }
    });
  });
});