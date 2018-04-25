

  $(document).ready(function() {
    $("#carousel").waterwheelCarousel({
      // include options like this:
      // (use quotes only for string values, and no trailing comma after last option)
      // option: value,
      // option: value
    });
  });

$(document).ready(function(){
    $('select').niceSelect();
    $('.carousel').carousel({
        shift:80,
        duration:20,
        
    });
  
});

$(function () {

    /*
     * JQuery Code for run the right side Bar
     */

    $('#open').click(function () {
        $('.infos-perso').css({"display": "block"});
        $('.sub-nav').css({"display": "block"});
        $('.years_production').css({"display": "block"});
        $('.after-update-action').css({"display": "block"});

        document.getElementById('side-menu').style.cssText = "width:194px;-webkit-transition: all 1s ease; -moz-transition: all 1s ease; -ms-transition: all 1s ease; -o-transition: all 1s ease;transition: all 1s ease;";

        $('.side-nav .hidden').show();

        $(this).addClass("hide");

        $('#close').addClass("show");

        $('#close').on('click', function () {

            document.getElementById('side-menu').style.width = '60px';
            $('.infos-perso').css({"display": "none"});
            $('.sub-nav').css({"display": "none"});
            $('.years_production').css({"display": "none"});
            $('.after-update-action').css({"display": "none"});
            var hidden = document.getElementsByClassName('hidden');

            $('.side-nav .hidden').hide(function () {

                $('.side-nav img').css({"width": "20px", "height": "20px", "position": "relative", "right": "4px"});

            });

            $(this).removeClass("show");

            $('#open').removeClass("hide");

        });
    });

});

$('#loginform').click(function(){
    $('.login').fadeToggle('slow');
    $(this).toggleClass('green');
});

$(document).mouseup(function (e)
{
    var container = $(".login");

    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
        $('#loginform').removeClass('green');
    }
});

// $(document).ready(function () {
    
//     $('.all_content > img').mouseenter(function () {
//         $('.meniature_content').fadeIn();
//     });

//     $('.all_content > img').mouseleave(function () {
//         $('.meniature_content').fadeOut();
//     });

// });



