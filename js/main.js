// hidden text ( section advantages)
$('[hidden-text]').on("click",function(){    
    $(this).find(".hidden-text").slideToggle(); 
    $(this).toggleClass("content-opened"); 
});


// smooth menu section scroll
$('.menu-item a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    let self = $(this);
    let target = this.hash;
    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop':  $target.offset().top -$('nav').outerHeight()
    }, 1000, function () {
        Number(location.hash.substr(1));
    });
});
// add to menu white bg

let header = $("nav");

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= header.outerHeight()) {
        header.addClass("white-bg");
    } else {
        header.removeClass("white-bg");
    }
});
  
// send email
$("#myForm").submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize()
    });
    $("#message").html("success");
    setTimeout(()=>{
        $("#message").html("");
    },2000);
});