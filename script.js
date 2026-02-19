document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация библиотек
    AOS.init({ duration: 1000, once: true, offset: 50 });
    lucide.createIcons();

    // 2. Хедер и Мобильное меню
    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Капча (Математический пример)
    const captchaLabel = document.getElementById('captchaLabel');
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const captchaResult = num1 + num2;
    if(captchaLabel) captchaLabel.innerText = `${num1} + ${num2} =`;

    // 4. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    phoneInput?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // 5. Обработка формы (AJAX имитация)
    const mainForm = document.getElementById('mainForm');
    const formStatus = document.getElementById('formStatus');

    mainForm?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const userCaptcha = document.getElementById('captchaInput').value;

        if (parseInt(userCaptcha) !== captchaResult) {
            formStatus.innerText = "Ошибка капчи. Попробуйте снова.";
            formStatus.className = "form-status error";
            return;
        }

        formStatus.innerText = "Отправка...";
        formStatus.className = "form-status success";

        // Имитация задержки сети
        await new Promise(resolve => setTimeout(resolve, 1500));

        formStatus.innerText = "Успешно! Мы свяжемся с вами в ближайшее время.";
        mainForm.reset();
        
        setTimeout(() => { formStatus.style.display = 'none'; }, 5000);
    });

    // 6. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2000);
    }

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // 7. Параллакс для фоновых слов (из Hero)
    document.addEventListener('mousemove', (e) => {
        const words = document.querySelectorAll('.floating-word');
        const x = (window.innerWidth / 2 - e.pageX) / 50;
        const y = (window.innerHeight / 2 - e.pageY) / 50;
        words.forEach(word => {
            word.style.transform = `translate(${x}px, ${y}px)`;
        });
    });
});