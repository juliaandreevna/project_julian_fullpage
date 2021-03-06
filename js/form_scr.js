jQuery(function($) {

    // // // // // // // // //
// // // ЮЛИАН КОНТАКТЫ // // //
    // // // // // // // 

    // footer
    $('.dev-footer-input').focus(function() {
        $(this).parent().addClass('is-focused has-label');
    });

    $('.dev-footer-input').blur(function() {
        $parent = $(this).parent();
        if ($(this).val() == "") {
            $parent.removeClass('is-focused has-label');
        }
        $parent.removeClass('is-focused');
    });


    // textarea_script
    $('.dev-footer-textarea').focus(function() {
        $(this).siblings(".dev-footer-label-correct").addClass("des-ico-active-footer");
        $(this).addClass("des-textarea-active-footer");

    });

    $('.dev-footer-textarea').blur(function() {
        if ($(this).val() == "") {
            $(this).siblings(".dev-footer-label-correct").removeClass("des-ico-active-footer");
            $(this).removeClass("des-textarea-active-footer");
        }
    });

    //  сброс формы

    $('#des_footer_form').on('reset', function(e) {
        var element = $('.dev-footer-input').parent();
        element.removeClass('has-label');
        $('.dev-footer-textarea').removeClass("des-textarea-active-footer");
        // call modal window after reset form
        modalWindowApply();
    });
    

    // modal.dialog
    $('.dev-get-manager-input').focus(function() {

        var domElement = $(this);
        domElement.parent().addClass('is-focused has-label');
        var name = domElement.attr("name");
        if (name == "form[name]") {
            domElement.parent().siblings(".uk-icon-user").addClass("des-ico-active-footer");
        }
        if (name == "form[tel]") {
            domElement.parent().siblings(".uk-icon-phone").addClass("des-ico-active-footer");
            setTimeout(function() {
                domElement.attr("placeholder", "+7");
            }, 400);

        } else if (name == "form[email]") {
            domElement.parent().siblings(".uk-icon-envelope").addClass("des-ico-active-footer");
        }
    });

    $('.dev-get-manager-input').blur(function() {
        var domElement = $(this);
        $parent = domElement.parent();
        if (domElement.val() == "") {
            $parent.removeClass('is-focused has-label');
            $parent.siblings(".uk-icon-user").removeClass("des-ico-active-footer");
            $parent.siblings(".uk-icon-envelope").removeClass("des-ico-active-footer");
            $parent.siblings(".uk-icon-phone").removeClass("des-ico-active-footer");
            domElement.attr("placeholder", "");
        }
        $parent.removeClass('is-focused');
    });
    
    $('#form_header_send_manager').on('reset', function(e) {
        var domElement = $('.dev-get-manager-input');
        var element = domElement.parent();
        element.removeClass('is-focused has-label');
        element.siblings(".uk-icon-user").removeClass("des-ico-active-footer");
        element.siblings(".uk-icon-phone").removeClass("des-ico-active-footer");
        domElement.attr("placeholder", "");
        // call modal window after reset form
        modalWindowApply();
    });
});


function modalWindowApply() {
    $.extend(UIkit.components.modal.defaults, {
        center: true
    });
    var modal = UIkit.modal("#des-id-modal-apply",{center:true});
     
    if (modal.isActive()) {
        modal.hide();
    } else {
        modal.show();
    }
}
