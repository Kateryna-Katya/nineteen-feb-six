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
            <span class="section-tag" style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Legal Transparency</span>
            
            <div class="legal-header" style="display: flex; align-items: center; gap: 15px; margin: 20px 0 30px;">
                <i data-lucide="alert-triangle" style="color: var(--color-carrot); width: 40px; height: 40px;"></i>
                <h1 style="margin: 0;">Отказ от ответственности</h1>
            </div>

            <div class="legal-content" style="max-width: 900px;">
                <div class="legal-block" style="margin-bottom: 30px; line-height: 1.8;">
                    <p>
                        <strong>Общая информация:</strong> Все технологии нового поколения, статьи и стратегии, 
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно 
                        информационно-ознакомительный характер. Они не являются персональной инвестиционной рекомендацией, 
                        профессиональным юридическим или карьерным советом. Передовая цифровая инфраструктура проекта 
                        предоставляется «как есть» для ознакомления с возможностями рынка.
                    </p>
                </div>

                <div class="legal-block" style="margin-bottom: 30px; line-height: 1.8;">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает прямых гарантий 
                        относительно того, что предложенные практики, применимые уже сегодня, принесут мгновенный результат. 
                        Упоминания потенциального карьерного роста, программ пассивного дохода или кейсов других участников 
                        не гарантируют аналогичных результатов для вас. Ваш успех — это пошаговый путь, который зависит от 
                        личных усилий и рыночной конъюнктуры в Великобритании и ЕС.
                    </p>
                </div>

                <div class="legal-block" style="margin-bottom: 30px; line-height: 1.8;">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация платформы <strong><?= $fullDomain ?></strong> 
                        не несет ответственности за любые решения, принятые вами на основе информации из блога. 
                        Решения, которые меняют правила игры, всегда сопряжены с личной ответственностью пользователя. 
                        Мы не отвечаем за прямые или косвенные последствия использования AI-инструментов или методологий 
                        развития, представленных на ресурсе.
                    </p>
                </div>

                <div class="legal-block risk-warning" style="margin-bottom: 30px; padding: 25px; background: rgba(255,107,53,0.05); border-radius: 20px; border-left: 4px solid var(--color-carrot);">
                    <p>
                        <strong>Предупреждение о рисках:</strong> Любая стратегия роста и переход на новый профессиональный уровень 
                        требуют тщательного анализа. Перед тем как переосмыслить подход к развитию или инвестировать время и ресурсы 
                        в новые проекты, мы настоятельно рекомендуем получить консультацию независимого специалиста. 
                        Платформа уже доступна в Европе, но правила адаптации могут отличаться в зависимости от конкретной юрисдикции.
                    </p>
                </div>

                <div class="legal-block agreement" style="font-size: 0.9rem; opacity: 0.7; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 20px;">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Используя сайт <strong><?= $domainTitle ?></strong>, 
                        вы подтверждаете, что полностью осознаете и принимаете условия данного дисклеймера. 
                        Доступ к платформе открыт для лиц старше 18 лет, действующих по собственной воле.
                    </p>
                </div>
            </div>

            <div style="margin-top: 40px;">
                <a href="./" class="btn btn--outline btn--sm">Вернуться на главную</a>
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