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
            <span class="section-tag" style="color: var(--color-carrot); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Secure Environment</span>
            <h1>Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" style="background: var(--color-light); padding: 30px; border-radius: 25px; border-left: 5px solid var(--color-green); margin-bottom: 40px;">
                    <p style="font-size: 1.1rem; line-height: 1.6; color: var(--color-dark);">
                        Политика конфиденциальности распространяется на персональные данные, предоставляемые клиентами 
                        <strong><?= $domainTitle ?></strong> для реализации стратегий карьерного роста, 
                        использования AI-инструментов и других взаимодействий в рамках нашей цифровой инфраструктуры.
                    </p>
                </div>

                <div class="policy-notice" style="margin-bottom: 50px; opacity: 0.8; font-size: 0.95rem;">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять положения Политики. 
                        Продолжая использовать платформу года для своего развития, вы даете полное согласие на обработку данных методами, 
                        соответствующими стандартам безопасности Великобритании и ЕС.
                    </p>
                </div>

                <h2 style="color: var(--color-green); margin-bottom: 25px;">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" style="display: flex; gap: 30px; margin-bottom: 30px;">
                    <div class="storage-item" style="display: flex; align-items: center; gap: 12px; font-weight: 600;">
                        <i data-lucide="calendar-clock" style="color: var(--color-carrot);"></i>
                        <span>Срок хранения до 75 лет</span>
                    </div>
                    <div class="storage-item" style="display: flex; align-items: center; gap: 12px; font-weight: 600;">
                        <i data-lucide="shield-check" style="color: var(--color-carrot);"></i>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p style="margin-bottom: 40px;">
                    Для предотвращения утечки данных мы используем передовую цифровую инфраструктуру. 
                    Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей вашего карьерного апгрейда.
                </p>

                <div class="data-collection-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 50px;">
                    <div class="data-box" style="padding: 35px; border-radius: 30px; background: #fff; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
                        <h3 style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; color: var(--color-green);">
                            <i data-lucide="cpu"></i> Техническая информация
                        </h3>
                        <ul style="list-style: none; padding: 0; line-height: 2;">
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> IP-адрес и время доступа</li>
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> Источники перехода на <?= $fullDomain ?></li>
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> Данные браузера и поведение на сайте</li>
                        </ul>
                    </div>
                    <div class="data-box" style="padding: 35px; border-radius: 30px; background: #fff; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
                        <h3 style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px; color: var(--color-green);">
                            <i data-lucide="user-check"></i> Персонализация
                        </h3>
                        <ul style="list-style: none; padding: 0; line-height: 2;">
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> Имя пользователя</li>
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> E-mail и номер телефона</li>
                            <li style="display: flex; align-items: center; gap: 10px;"><span style="color: var(--color-carrot);">•</span> История карьерных консультаций</li>
                        </ul>
                    </div>
                </div>

                <h2 style="color: var(--color-green); margin-bottom: 25px;">Цели обработки персональных данных</h2>
                <ul class="legal-list" style="list-style: none; padding: 0; margin-bottom: 40px;">
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;">
                        <i data-lucide="check-circle-2" style="color: var(--color-green-light); width: 20px;"></i>
                        Предоставление доступа к инновационной платформе развития.
                    </li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;">
                        <i data-lucide="check-circle-2" style="color: var(--color-green-light); width: 20px;"></i>
                        Учет пожеланий при разработке индивидуальных стратегий.
                    </li>
                    <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 12px;">
                        <i data-lucide="check-circle-2" style="color: var(--color-green-light); width: 20px;"></i>
                        Информирование о новых методиках и материалах блога.
                    </li>
                </ul>

                <h2 style="color: var(--color-green); margin-bottom: 20px;">Использование Cookies</h2>
                <p style="margin-bottom: 50px;">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <strong>Англия</strong>), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете отозвать согласие в настройках браузера.
                </p>

                <div class="rights-block" style="text-align: center; padding: 50px; background: var(--color-dark); border-radius: 40px; color: #fff;">
                    <h2 style="color: var(--color-carrot); margin-bottom: 20px;">Ваши права</h2>
                    <p style="margin-bottom: 30px; opacity: 0.8;">
                        Если вы хотите отредактировать свои данные, запросить доступ к ним или прекратить их обработку, 
                        свяжитесь с экспертной поддержкой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary" style="padding: 15px 40px; font-size: 1.1rem;">hello@<?= $fullDomain ?></a>
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