var UserAlert = function (message, type) {
    if (type === undefined) {
        type = 'info';
    }

    var closeButton = $('<a/>', {
        'href': '#',
        'html': '<span class="fa fa-remove"></span>',
        'class': 'alert-remove',
        'onclick': "$(this).parents('.alert-message').remove()"
    });

    var newAlert = $('<div/>', {
        'class': 'alert-message alert-' + type,
        'html': message
    });

    newAlert.append(closeButton);

    if (!$('#alert-container').length) {
        $('body')
            .append($('<div/>', {
                id: 'alert-container'
            }));
    }

    $('#alert-container')
        .append(newAlert);

    $('#alert-container')
        .css({
            'top': $(document).scrollTop() + 10
        });

    $('.alert-remove').click(function () {
        $('#alert-message').remove();
    });

    setTimeout(function () {
        newAlert.fadeOut(function () {
            newAlert.remove();
        });
    }, 5000);
};