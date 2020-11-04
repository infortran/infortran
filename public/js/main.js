(function ($) {
    "use strict"
    $(window).on('load', function () {
        $("#preloader").delay(600).fadeOut();
    });
    $('body').scrollspy({target: '#nav', offset: $(window).height() / 2});
    $("#nav .main-nav a[href^='#']").on('click', function (e) {
        e.preventDefault();
        var hash = this.hash;
        $('html, body').animate({scrollTop: $(this.hash).offset().top}, 600);
    });
    $('#back-to-top').on('click', function () {
        $('body,html').animate({scrollTop: 0}, 600);
    });
    $('.btn-scrolling').on('click', function(e){
        e.preventDefault();
        $('body,html').animate({scrollTop: $(this.hash).offset().top}, 600);
    });
    $('#nav .nav-collapse').on('click', function () {
        $('#nav').toggleClass('open');
    });
    $('.has-dropdown a').on('click', function () {
        $(this).parent().toggleClass('open-drop');
    });
    $(window).on('scroll', function () {
        var wScroll = $(this).scrollTop();
        wScroll > 1 ? $('#nav').addClass('fixed-nav') : $('#nav').removeClass('fixed-nav');
        wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
    });
    $('.work').magnificPopup({delegate: '.lightbox', type: 'image'});
    $('#about-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 15,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: true,
        autoplay: true,
        animateOut: 'fadeOut'
    });
    $('#testimonial-slider').owlCarousel({
        loop: true,
        margin: 15,
        dots: true,
        nav: false,
        autoplay: true,
        responsive: {0: {items: 1}, 992: {items: 2}}
    });
})(jQuery);
$(document).ready(function(){
    $('#mensaje-contacto-form').submit(function(e){
        e.preventDefault();
        contactForm();
        resetFormAlerts();
        //$('#modal-mensaje-enviado').modal('show');
    });
    $('#input-contacto-name').focus(function(){resetFormAlerts()});
    $('#input-contacto-email').focus(function(){resetFormAlerts()});
    $('#input-contacto-subject').focus(function(){resetFormAlerts()});
    $('#input-contacto-message').focus(function(){resetFormAlerts()});

    $('#modal-mensaje-enviado').on('hidden.bs.modal', function (e) {
        location.reload();
    })
});

function contactForm(){
    var data = new FormData();
    data.append('name', $('#input-contacto-name').val());
    data.append('email', $('#input-contacto-email').val());
    data.append('subject', $('#input-contacto-subject').val());
    data.append('message', $('#input-contacto-message').val());
    data.append('g-recaptcha-response', grecaptcha.getResponse());
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'/contacto',
        method:'POST',
        data:data,
        cache:false,
        contentType:false,
        processData:false,
        dataType:'json',
        beforeSend:function(){
            $('#btn-enviar-mensaje').addClass('active');
        },
        success:function(json){
            if($.isEmptyObject(json.error)){
                $('#btn-enviar-mensaje').addClass('success').html('<i class="fa fa-check"></i>');
                $('#modal-mensaje-enviado').modal('show');
                setTimeout(function(){
                    $('#btn-enviar-mensaje').removeClass('success active').html('Enviar Mensaje');
                },3000);
            }else{
                setTimeout(function(){
                    $('#btn-enviar-mensaje').removeClass('success active');
                    if(!$.isEmptyObject(json.error.name)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.name-required').show();
                    }
                    if(!$.isEmptyObject(json.error.email)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.email-required').show();
                    }
                    if(!$.isEmptyObject(json.error.subject)){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.subject-required').show();
                    }
                    if(!$.isEmptyObject(json.error.message)){
                        if(json.error.message == 'The message field is required.'){
                            $('.contact-form-alerts').fadeIn(800);
                            $('.message-required').show();
                        }else{
                            $('.contact-form-alerts').fadeIn(800);
                            $('.message-limit').show();
                        }
                    }
                    if(!$.isEmptyObject(json.error['g-recaptcha-response'])){
                        $('.contact-form-alerts').fadeIn(800);
                        $('.error-recaptcha').show();
                    }
                },1000);
            }
        },
        error:function(x,y,z){
            console.log(x.responseText);
            alert('error')
        }
    });
}

function resetFormAlerts(){
    $('.contact-form-alerts').fadeOut(800);
    $('.name-required').fadeOut(600);
    $('.email-required').fadeOut(600);
    $('.subject-required').fadeOut(600);
    $('.message-required').fadeOut(600);
    $('.error-recaptcha').fadeOut(600);
    $('.email-format').fadeOut(600);
    $('.message-limit').fadeOut(600);
}