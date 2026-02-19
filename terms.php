<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и стратегии роста</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M16 2L2 16h6v14h16V16h6L16 2z' fill='%232B580C'/%3E%3Cpath d='M16 6l-9 9h4v11h10V15h4l-9-9z' fill='%23FF6B35'/%3E%3Ccircle cx='25' cy='7' r='4' fill='%23A8E063'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#path" class="nav__link">Путь успеха</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Legal Agreement</span>
            <h1>Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" style="background: var(--color-light); padding: 30px; border-radius: 25px; border-left: 5px solid var(--color-green); margin-bottom: 40px;">
                    <p style="font-size: 1.1rem; line-height: 1.6;">
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и администрацией <strong><?= $domainTitle ?></strong>. 
                        Используя наши AI-инструменты и стратегии роста, вы подтверждаете полное согласие с данными правилами.
                    </p>
                </div>

                <div class="legal-section" style="margin-bottom: 35px;">
                    <h2 style="color: var(--color-green); margin-bottom: 15px;">1. Предмет Соглашения</h2>
                    <p>
                        Наша команда предоставляет Пользователю доступ к передовой цифровой инфраструктуре сайта 
                        <strong><?= $fullDomain ?></strong>. Это включает в себя доступ к инновационным материалам блога, 
                        индивидуальным карьерным консультациям и решениям, которые меняют правила игры на рынке труда Англии и ЕС.
                    </p>
                </div>

                <div class="legal-section" style="margin-bottom: 35px;">
                    <h2 style="color: var(--color-green); margin-bottom: 15px;">2. Обязанности и права Пользователя</h2>
                    <p style="margin-bottom: 15px;">Для обеспечения безопасности и стабильности платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list" style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                            <i data-lucide="shield-x" style="color: var(--color-carrot); width: 20px; flex-shrink: 0;"></i>
                            <span>Публиковать вредоносную информацию или спам.</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                            <i data-lucide="shield-x" style="color: var(--color-carrot); width: 20px; flex-shrink: 0;"></i>
                            <span>Пытаться нарушить работу кода или анимаций сайта.</span>
                        </li>
                        <li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;">
                            <i data-lucide="shield-x" style="color: var(--color-carrot); width: 20px; flex-shrink: 0;"></i>
                            <span>Использовать автоматизированные скрипты для сбора данных без разрешения.</span>
                        </li>
                    </ul>
                </div>

                <div class="legal-section" style="margin-bottom: 35px;">
                    <h2 style="color: var(--color-green); margin-bottom: 15px;">3. Интеллектуальная собственность</h2>
                    <div class="property-block" style="display: flex; gap: 20px; align-items: center; padding: 25px; background: rgba(168, 224, 99, 0.1); border-radius: 20px;">
                        <i data-lucide="copyright" style="color: var(--color-green); width: 40px; height: 40px;"></i>
                        <p style="font-size: 0.95rem; margin: 0;">
                            Весь контент на <strong><?= $fullDomain ?></strong> (тексты, дизайн, интерактивные блоки) защищен авторским правом. 
                            Вам предоставляется лицензия для личного использования в целях построения карьеры, которая работает на вас.
                        </p>
                    </div>
                </div>

                <div class="legal-section" style="margin-bottom: 35px;">
                    <h2 style="color: var(--color-green); margin-bottom: 15px;">4. Ограничение ответственности</h2>
                    <div class="warning-block" style="padding: 25px; border: 1px dashed var(--color-carrot); border-radius: 20px;">
                        <p style="margin: 0; font-size: 0.95rem;">
                            Технологии предоставляются по принципу <strong>«как есть»</strong>. Мы не несем ответственности за косвенные убытки, 
                            связанные с использованием или невозможностью использования инструментов <strong><?= $domainTitle ?></strong>. 
                            Ваша стратегия роста — это ваша ответственность.
                        </p>
                    </div>
                </div>

                <div class="legal-section" style="margin-bottom: 40px;">
                    <h2 style="color: var(--color-green); margin-bottom: 15px;">5. Изменения и юрисдикция</h2>
                    <p>
                        Мы можем обновлять Условия для улучшения адаптации платформы. Все споры регулируются в соответствии с законодательством 
                        <strong>Великобритании</strong>. Конфликты разрешаются путем переговоров по месту регистрации Оператора.
                    </p>
                </div>

                <div class="contact-footer-policy" style="padding: 40px; background: var(--color-dark); border-radius: 30px; color: #fff; text-align: center;">
                    <h2 style="color: var(--color-carrot); margin-bottom: 15px;">Остались вопросы?</h2>
                    <p style="opacity: 0.8; margin-bottom: 20px;">Если у вас есть вопросы по настоящему Соглашению, свяжитесь с нами:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail" style="font-size: 1.2rem; font-weight: 700; color: #fff; text-decoration: none; border-bottom: 2px solid var(--color-green-light);">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__text"><?= $domainTitle ?></span>
                    </a>
                    <p class="footer__description">
                        Переосмыслите подход к развитию. Постройте карьеру, которая работает на вас, используя технологии нового поколения.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#path">Путь успеха</a></li>
                        <li><a href="./#expertise">Экспертиза</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contact-info">
                        <li>
                            <i data-lucide="phone" class="icon-small"></i>
                            <a href="tel:+442040971408">+44 20 4097 1408</a>
                        </li>
                        <li>
                            <i data-lucide="mail" class="icon-small"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin" class="icon-small"></i>
                            <span>15 Bishopsgate, London EC2N 3AR, United Kingdom</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>© <?= date('Y') ?> <?= $domainTitle ?>. Все права защищены. Платформа доступна в Европе.</p>
            </div>
        </div>
    </footer>
    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
        </div>
    </div>
    
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu__inner">
            <nav class="mobile-nav">
                <a href="./#hero" class="mobile-nav__link">Главная</a>
                <a href="./#path" class="mobile-nav__link">Путь успеха</a>
                <a href="./#expertise" class="mobile-nav__link">Экспертиза</a>
                <a href="./#cases" class="mobile-nav__link">Кейсы</a>
                <a href="./#blog" class="mobile-nav__link">Блог</a>
                <a href="./#contact" class="mobile-nav__link btn btn--primary">Связаться</a>
            </nav>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>