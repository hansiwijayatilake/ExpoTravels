/**
 * Created by Hansamali on 12/27/2016.
 */


$(function() {
    $('#auctions').click(function(){
        $('.submenu').slideToggle();
    });
});

$(function () {
    $("#slider").excoloSlider();
});

$(function () {
    $("#slider").excoloSlider({
        mouseNav: false,
        interval: 5000, // = 5 seconds
        playReverse: true
    });
});




$("#slideshow > div:gt(0)").hide();

setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
}, 3000);


