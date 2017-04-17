/* CARD REVEAL MODIFIER FOR JOURNAL*/

(function ($) {
    $(document).ready(function () {
        $(document).on('click.card', '.card', function (e) {
            console.log(e);
            if ($(this).find('.card-reveal').length) {
                if ($(e.target).hasClass('journal_activator')){
                    console.log("wadddd");
                    $(this).find('.card-reveal').css({
                        display: 'block'
                    }).velocity("stop", false).velocity({
                        translateY: '-100%'
                    }, {
                        duration: 300,
                        queue: false,
                        easing: 'easeInOutQuad'
                    });
                }
            }
        });
    });
}(jQuery));