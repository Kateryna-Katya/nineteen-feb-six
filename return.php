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
            <span class="section-tag" style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Refund Management</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card" style="background: var(--color-light); padding: 30px; border-radius: 25px; border-left: 5px solid var(--color-carrot); margin-bottom: 40px;">
                    <p style="font-size: 1.1rem; line-height: 1.6;">
                        Мы стремимся к максимальной прозрачности и доверию. В <strong><?= $domainTitle ?></strong> 
                        действует передовая цифровая инфраструктура поддержки, которая гарантирует соблюдение прав потребителей 
                        при реализации вашей стратегии роста.
                    </p>
                </div>

                <h2 style="color: var(--color-green); margin-bottom: 25px;">Условия для оформления возврата</h2>
                <div class="refund-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 50px;">
                    <div class="refund-card" style="padding: 30px; background: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 25px; transition: 0.3s;">
                        <i data-lucide="file-warning" style="color: var(--color-carrot); margin-bottom: 15px;"></i>
                        <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Несоответствие</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Если технологии и материалы существенно отличаются от заявленных на <?= $domainTitle ?>.</p>
                    </div>
                    <div class="refund-card" style="padding: 30px; background: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 25px; transition: 0.3s;">
                        <i data-lucide="shield-alert" style="color: var(--color-carrot); margin-bottom: 15px;"></i>
                        <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Ошибки системы</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Критические барьеры на <?= $fullDomain ?>, мешающие вашему карьерному апгрейду.</p>
                    </div>
                    <div class="refund-card" style="padding: 30px; background: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 25px; transition: 0.3s;">
                        <i data-lucide="refresh-ccw" style="color: var(--color-carrot); margin-bottom: 15px;"></i>
                        <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Cooling-off Period</h3>
                        <p style="font-size: 0.9rem; opacity: 0.8;">Право на отказ в течение 14 дней для пользователей в Европе и Великобритании.</p>
                    </div>
                </div>

                <div class="procedure-block" style="margin-bottom: 50px;">
                    <h2 style="color: var(--color-green); margin-bottom: 25px;">Процедура запроса</h2>
                    <p style="margin-bottom: 30px;">Чтобы инициировать возврат в <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini" style="display: flex; flex-direction: column; gap: 15px;">
                        <div class="step-mini" style="display: flex; align-items: center; gap: 15px; background: var(--color-light); padding: 15px 25px; border-radius: 15px;">
                            <span style="background: var(--color-green); color: #fff; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: 700;">1</span>
                            <span>Письмо на <a href="mailto:hello@<?= $fullDomain ?>" style="font-weight: 600; color: var(--color-carrot);">hello@<?= $fullDomain ?></a></span>
                        </div>
                        <div class="step-mini" style="display: flex; align-items: center; gap: 15px; background: var(--color-light); padding: 15px 25px; border-radius: 15px;">
                            <span style="background: var(--color-green); color: #fff; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: 700;">2</span>
                            <span>Тема: «Запрос на возврат — <?= $domainTitle ?>»</span>
                        </div>
                        <div class="step-mini" style="display: flex; align-items: center; gap: 15px; background: var(--color-light); padding: 15px 25px; border-radius: 15px;">
                            <span style="background: var(--color-green); color: #fff; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: 700;">3</span>
                            <span>Укажите ФИО и детали транзакции</span>
                        </div>
                    </div>
                </div>

                <h2 style="color: var(--color-green); margin-bottom: 20px;">Сроки и способ зачисления</h2>
                <p style="margin-bottom: 40px;">
                    После одобрения экспертной поддержкой, возврат будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются на тот же счет, с которого была совершена оплата. 
                    Фактический срок зависит от регламента вашего банка в <strong>Великобритании</strong> или стране вашего пребывания.
                </p>

                <div class="warning-block" style="padding: 40px; border: 1px solid rgba(0,0,0,0.1); border-radius: 30px; background: #fff;">
                    <h2 style="font-size: 1.3rem; margin-top: 0; color: var(--color-carrot);">Исключения и ограничения</h2>
                    <ul class="legal-list" style="list-style: none; padding: 0; margin-top: 20px;">
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="x-circle" style="color: #ff4d4d; width: 18px;"></i>
                            Запрос подан по истечении 14 календарных дней.
                        </li>
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="x-circle" style="color: #ff4d4d; width: 18px;"></i>
                            Использование более 50% материалов программы пассивного дохода.
                        </li>
                        <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="x-circle" style="color: #ff4d4d; width: 18px;"></i>
                            Нарушение правил использования платформы.
                        </li>
                    </ul>
                </div>

                <div class="contact-footer-policy" style="margin-top: 60px; text-align: center; border-top: 1px solid rgba(0,0,0,0.1); padding-top: 40px;">
                    <h2 style="font-size: 1.2rem; margin-bottom: 10px;">Остались вопросы?</h2>
                    <p style="margin-bottom: 20px;">Мы здесь, чтобы помочь вашему проекту расти без рисков.</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary">Написать в поддержку</a>
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