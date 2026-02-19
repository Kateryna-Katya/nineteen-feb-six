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
            <span class="section-tag" style="color: var(--color-carrot); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Career Hub</span>
            
            <h1>Свяжитесь с экспертами <?= $domainTitle ?></h1>

            <p class="lead-text">
                Мы помогаем воплотить мечты в реальность и построить карьеру, которая работает на вас. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> для получения экспертной поддержки на всех этапах вашего профессионального апгрейда. 
                Наши консультанты в Лондоне на связи по будням с 09:00 до 18:00 (GMT).
            </p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i data-lucide="mail"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для запросов на консалтинг и вопросов по обучению:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия для быстрой адаптации и записи на аудит:</p>
                    <a href="tel:+442040971408" class="contact-link">+44 20 4097 1408</a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <h2>Наш офис</h2>
                    <p>Штаб-квартира <strong><?= $domainTitle ?></strong> в финансовом центре Европы:</p>
                    <address class="contact-address">
                        15 Bishopsgate,<br>
                        London EC2N 3AR,<br>
                        United Kingdom
                    </address>
                </div>
            </div>

            <div class="contact-extra">
                <p>
                    Технологии нового поколения и доступ к платформе открыты для всех жителей Европы. 
                    Вы также можете <a href="./#contact" style="color: var(--color-green); font-weight: 600;">запросить доступ</a> через форму на главной странице для мгновенной обработки вашей заявки.
                </p>
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