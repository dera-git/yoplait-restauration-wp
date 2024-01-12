// ajax filter recette
jQuery(document).ready(function($){
    
    $("body").delegate('.page-link', 'click', function(e){
        e.preventDefault();
        var url = new URL($(this).attr('href')).searchParams;
        var paged = url.get('paged');
        $('[name="paged"]').val(paged);
        $('#id-filter-form').submit();

    });
    jQuery( '.js-temps, .js-ingredients, .js-modele input[type="checkbox"]' ).on( "change", function() {
        $('[name="paged"]').val(1);
        $('#id-filter-form').submit();
    });
    
    $('#id-filter-form').submit(function(event) {
        
        event.preventDefault();
        var data = $('#id-filter-form').serialize() + '&action=filterposts';
        var loader = '<div class="text-center mb-5"><div class="kl-spinner-loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
       
        $.ajax({
            url: wpAjax.ajaxUrl,
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                $('.filtered-posts').html( loader );
                $('.js-temps').attr( 'disabled', 'disabled' );
                $('.js-ingredients').attr( 'disabled', 'disabled' );
            },
            success : function( data ) {
                if ( data ) {
                    $('.filtered-posts').html( data.posts );
    
                    $('.js-temps').removeAttr('disabled');
                    $('.js-ingredients').removeAttr('disabled');
                } else {
                    $('.filtered-posts').html( 'No posts found.' );
                }
            }
        });
    });

});
// End ajax filter recette

(function($) {
    "use strict";
    $(document).ready(function(){
        $('.js-toggle-password').on('click', function(){
            let wrapper = $(this).closest('.kl-input-group-password');
            let input_password = wrapper.find('.kl-form-control');
            if(input_password[0].type === "password") {
                input_password[0].type = "text";
                $(this).addClass('show');
            } else {
                input_password[0].type = "password";
                $(this).removeClass('show');
            }
        });

        if($('.kl-equal-prt').length){
            $('.kl-equal-prt').matchHeight({ property: 'min-height' });
        }

        //login
        let html_content = $('.kl-lost-pass').html()
        $('.login-remember').append(html_content)

    });
    
    //counter number animation 
    
    $(window).scroll(startCounter);

    function startCounter(){
        let scrollY = (window.pageYOffset || document.documentElement.scrollTop) + window.innerHeight;
        let divPos = document.querySelector('.js-section-key').offsetTop;

        if (scrollY > divPos) {
            $(window).off("scroll", startCounter);
            
            $('.js-counter').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        } 
    }

})(jQuery);

// show modal login & register in error
window.onload = () => {
    if ($('#wppb-loginform').length > 0) {
        const url = new URL($('#wppb-loginform').attr('action')).searchParams;
        const error = url.has('loginerror')
        if(error){
            $('.kl-modal-login').modal('show'); 
        }
    }
    
    const register_modal = document.querySelector(".kl-modal-register")
    const container_modal = document.querySelector(".kl-container-register")
    if (container_modal.querySelector('#wppb_form_general_message') !== null) {
        $(register_modal).modal('show')
    }

    // const forgotPw_modal = document.querySelector(".kl-modal-forgot-pw")
    // const formrgotPw_form = document.querySelector(".kl-form-control-forgot-pw")
    // if (formrgotPw_form.querySelector('.wppb-warning') !== null) {
    //     $(forgotPw_modal).modal('show')
    // }
};