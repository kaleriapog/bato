export default function accordion(el) {
    if (!el) return;

    jQuery(document).ready(function($) {
        $(document).on('click', '.accordion__item', function(){
            let _text = $(this).find('.accordion__item-description');
            $(this).toggleClass('active');
            _text.slideToggle();
        });
    });
}