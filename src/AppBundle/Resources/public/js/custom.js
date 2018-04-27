$(function () {
    // start cookie alert check
    $.fn.cookiesAlert({
        url: globalPrivacyPolicyUrl,
        message: globalCookiePolicyMessage,
        label: 'Cookie policy'
    });

    $(window).preloader({
        delay: 500
    });

    var keyupInterval = null;
    $('.navbar form input').keyup(function () {
        if (keyupInterval) {
            clearTimeout(keyupInterval);
        }

        keyupInterval = setTimeout(function () {
            UserAlert('Sorry, search is not yet available', 'error');
        }, 500);
    });
});
