window.$ = window.jQuery = require('jquery')
import 'slick-carousel';

$('.hello').slick({
    dots: true,
    autoplay: false,
    infinite:true,
    autoplaySpeed: 5000,
});