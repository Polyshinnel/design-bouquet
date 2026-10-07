import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import { Fancybox } from '@fancyapps/ui';
import 'swiper/css';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

const awardsSlider = document.querySelector('[data-awards-slider]');

if (awardsSlider) {
    new Swiper(awardsSlider, {
        modules: [Autoplay],
        slidesPerView: 1.2,
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });

    Fancybox.bind('[data-fancybox="awards"]', {});
}
