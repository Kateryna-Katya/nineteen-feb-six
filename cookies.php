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
            <span class="section-tag" style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Data Privacy</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать в <strong><?= $domainTitle ?></strong>! Чтобы обеспечить быстрый и лёгкий старт на нашей платформе, 
                    проанализировать вашу активность и предоставить решения, которые меняют правила игры, мы используем файлы cookie.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой текстовый файл, который сохраняется на вашем устройстве при посещении сайта. 
                    Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши предпочтения в рамках стратегии роста 
                    (например, язык, настройки региона Великобритания и другие параметры) для более удобной адаптации без сложностей.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, следующим образом:
                </p>
                <ul class="legal-list" style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--color-carrot);">●</span>
                        <strong>Строго необходимые:</strong> Обеспечивают вход в систему и безопасность передовой цифровой инфраструктуры.
                    </li>
                    <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--color-carrot);">●</span>
                        <strong>Аналитические:</strong> Сбор анонимных данных о том, как вы взаимодействуете с нашими AI-инструментами.
                    </li>
                    <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--color-carrot);">●</span>
                        <strong>Функциональные:</strong> Помогают запомнить ваш выбор для персонализированного карьерного апгрейда.
                    </li>
                    <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                        <span style="position: absolute; left: 0; color: var(--color-carrot);">●</span>
                        <strong>Маркетинговые:</strong> Используются, чтобы предложить практики, применимые уже сегодня именно в вашем регионе.
                    </li>
                </ul>

                <h2>Зачем мы это делаем?</h2>
                <ul class="legal-list" style="list-style: none; padding: 0; margin-bottom: 30px;">
                    <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="check" style="color: var(--color-green); width: 18px;"></i>
                        Обеспечение стабильной работы платформы в странах Европы.
                    </li>
                    <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="check" style="color: var(--color-green); width: 18px;"></i>
                        Анализ поведения для улучшения методологий карьерного роста.
                    </li>
                    <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="check" style="color: var(--color-green); width: 18px;"></i>
                        Персонализация контента: «Программа пассивного дохода» и «Технология года».
                    </li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы можете в любой момент изменить настройки в браузере. Помните, что технологии, которые работают на вас, 
                    могут требовать включенных cookie для корректной визуализации (например, анимаций или 3D-элементов).
                </p>

                <div class="contact-info-block" style="margin-top: 50px; padding: 40px; background: var(--color-light); border-radius: 30px;">
                    <h2 style="margin-top: 0;">Контактная информация</h2>
                    <p>Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:</p>
                    <ul class="contact-data" style="list-style: none; padding: 0; margin-top: 20px;">
                        <li style="margin-bottom: 10px;"><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" style="color: var(--color-carrot);">hello@<?= $fullDomain ?></a></li>
                        <li style="margin-bottom: 10px;"><strong>Телефон:</strong> <a href="tel:+442040971408" style="color: var(--color-carrot);">+44 20 4097 1408</a></li>
                        <li style="margin-bottom: 10px;"><strong>Адрес:</strong> 15 Bishopsgate, London EC2N 3AR, United Kingdom</li>
                    </ul>
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