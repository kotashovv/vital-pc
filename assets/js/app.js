document.addEventListener("DOMContentLoaded", () => {

    // настройки слайдера галерии
    const gallerySwiper = new Swiper('.gallery__wrap', {
        centeredSlides: true,
        initialSlide: 1,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            }
        }
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

    const buttons = document.querySelectorAll('[data-goto]');

    if (buttons.length != 0) {
        buttons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Предотвращаем стандартное поведение ссылки
                CloseMobileMenu();
                // Получаем значение атрибута data-goto (это будет id элемента)
                const targetId = button.getAttribute('data-goto');

                // Находим целевой элемент по id
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    // Плавно прокручиваем к целевому элементу
                    targetElement.scrollIntoView({
                        behavior: 'smooth', // Плавная прокрутка
                        block: 'start'      // Выравнивание элемента по верхней части экрана
                    });
                }
            });
        });
    }

    const mobileMenuBtn = document.querySelector('.menu-btn');
    const mobileMenu = document.querySelector('.header__mobile-menu');
    const mainContent = document.querySelector('main');
    if (mobileMenuBtn) {

        // Обработчик клика на кнопку меню
        mobileMenuBtn.addEventListener('click', (e) => {
            if (mobileMenuBtn.classList.contains('active')) {
                CloseMobileMenu();
            } else {
                OpenMobileMenu();
            }
        });
        // Функция для открытия мобильного меню
    }

    function OpenMobileMenu() {
        mobileMenuBtn.classList.add('active');
        mobileMenu.classList.add('active');
        mainContent.classList.add('opacity');
        document.body.style.overflow = 'hidden';

        // Обработчик клика вне области .header__wrap
        document.addEventListener('click', handleClickOutside);
    }

    // Функция для закрытия мобильного меню
    function CloseMobileMenu() {
        mobileMenuBtn.classList.remove('active');
        mobileMenu.classList.remove('active');
        mainContent.classList.remove('opacity');
        document.body.style.overflow = 'auto';

        // Удаляем обработчик клика вне области .header__wrap
        document.removeEventListener('click', handleClickOutside);
    }

    // Функция для обработки клика вне .header__wrap
    function handleClickOutside(event) {
        if (!event.target.closest('.header__wrap')) {
            CloseMobileMenu();
        }
    }

    const callPopupItems = document.querySelectorAll('.call-popup');
    if (callPopupItems.length !== 0) {
        const popupWrap = document.querySelector('.popup-wrap');
        const closePopupBtn = document.querySelector('.close-popup');
        const popupItem = document.querySelector('.popup__item');

        function openPopup() {
            document.body.style.overflow = 'hidden';
            popupWrap.classList.add('active');
        }


        function closePopup() {
            document.body.style.overflow = 'auto';
            popupWrap.classList.remove('active');
        }

        callPopupItems.forEach(item => {
            item.addEventListener('click', openPopup);
        });

        closePopupBtn.addEventListener('click', closePopup);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && popupWrap.classList.contains('active')) {
                closePopup();
            }
        });

        popupWrap.addEventListener('click', function (event) {
            if (!popupItem.contains(event.target)) {
                closePopup();
            }
        });
    }


    const form = document.getElementById('my-form');
    const responseMessage = document.getElementById('response-message');

    if (form) {
        const formAction = form.getAttribute('action');
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch(formAction, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    responseMessage.innerHTML = '<p style="color: green;">' + data + '</p>';
                    form.reset();
                })
                .catch(error => {
                    responseMessage.innerHTML = '<p style="color: red;">Ошибка при отправке формы.</p>';
                });
        });
    }

})