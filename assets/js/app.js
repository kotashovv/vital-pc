document.addEventListener("DOMContentLoaded", () => {

    // настройки слайдера галерии
    const gallerySwiper = new Swiper('.gallery__wrap', {
        slidesPerView: 2.5,
        spaceBetween: 30,
        centeredSlides: true,
        initialSlide: 1,
    })

    // активация фэнсибокса
    Fancybox.bind("[data-fancybox]", {

    });

    const masonryGrid = document.querySelector('.masonry-wrap');
    if (masonryGrid) {
        let msnry = new Masonry(masonryGrid, {
            itemSelector: '.masonry-item',
        })
    }

    // логика факов 
    const faqItemBtn = document.querySelectorAll('.faq__item-button');
    if (faqItemBtn.length != 0) {
        faqItemBtn.forEach(item => {
            item.addEventListener('click', (e) => {
                let target = e.target;
                const faqText = item.nextElementSibling;
                if (target.classList.contains('active')) {
                    target.closest('.faq__item').classList.remove('active');
                    faqText.classList.remove('active');
                    target.classList.remove('active');
                } else {
                    CloseAllFaq();
                    target.closest('.faq__item').classList.add('active');
                    faqText.classList.add('active');
                    target.classList.add('active');
                }
            })
        })

        function CloseAllFaq() {
            faqItemBtn.forEach(item => {
                item.closest('.faq__item').classList.remove('active');
                item.classList.remove('active');
                item.nextElementSibling.classList.remove('active');
            })
        }
    }
})