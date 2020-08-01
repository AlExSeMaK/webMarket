<!DOCTYPE HTML>
<html lang=ru>
<head>
    <!--Общие css-->
    <link href="/static/css/main.css" rel="stylesheet">
    <link href="/static/css/<? echo $data_css; ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!--Общие js библиотеки подключаются здесь-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title><? echo $page_title; ?></title>
</head>
<body class="main_content">
<header class="header_area">
    <nav>
        <ul class="grid-menu grid-menu_p grid-menu_t grid-menu_mt">
            <li class="logo_area content-center">
                <a href="/"><img src="https://picsum.photos/700"></a>
            </li>
            <li class="main_area content-center">
                <div><a href="/"><p>Главная</p></a></div>
            </li>
            <li class="catalog_area content-center">
                <div><a href="/catalog">Каталог</a></div>
                <ul >
                    <li class="content-center">
                        <div><a href="/computers">Комьпьютеры</a></div>
                    </li>
                    <li class="content-center">
                        <div><a href="/laptops">Ноутбуки</a></div>
                    </li>
                    <li class="content-center">
                        <div><a href="/smartphones">Смартфоны</a></div>
                    </li>
                    <li class="content-center">
                        <div><a href="/pads">Планшеты</a></div>
                    </li>
                    <li class="content-center">
                        <div><a href="/office_equipment">Оргтехника</a></div>
                    </li>
                    <li class="content-center">
                        <div><a href="/acsessyars">Аксесуары</a></div>
                    </li>
                </ul>
            </li>
            <li class="bascet_area content-center">
                <div><a href="#"><img src="https://picsum.photos/700"></a></div>
            </li>
            <li class="register_area content-center">
                <div><a href="/regUser"><p>Регистрация</p></a> </div>
            </li>
            <li class="entrance_area content-center">
                <div><a href="#auth"><p>Вход</p></a></div>
            </li>
        </ul>
    </nav>
</header>
<div class="left-spam"></div>
<? include_once $content; ?>
<footer class="footer_area flex-row space-around content-center">
    <div class="flex-column">
        <div class="flex-column">
            <div class="flex-6"><p>+7 (812) 658-94-76</p></div>
        </div>
        <div class="flex-column">
            <div class="flex-6"><p>+7 (911) 758-77-32</p></div>
        </div>
        <div class="flex-column">
            <div class="flex-6"><p>+7 (812) 658-94-76</p></div>
        </div>
        <div class="flex-column">
            <div class="flex-6"><p>vintmarket@mail.ru</p></div>
        </div>
        <div class="flex-column">
            <div class="flex-6"><p>vintopttorg@mail.ru</p></div>
        </div>
        <div class="flex-column">
            <div class="flex-6"><p>СПБ проспект Демьянова д.6</p></div>
        </div>
    </div>
    <section>
        <h5>Соц. сети</h5>
        <div class="social">
            <a href="#" class="facebook"></a>
            <a href="#" class="twitter"></a>
            <a href="#" class="youtube"></a>
            <a href="#" class="instagram"></a>
            <a href="#" class="google"></a>
        </div>
    </section>
</footer>
<!--здесь подключаются общие js файлы
<script src="/static/js/common.js"></script>-->
</body>
<section class="modal" id="auth">
    <form class="flex-column" name="auth" action="#" method="post">
        <label>
            <input type="email" name="email" placeholder="Введите e-mail">
        </label>
        <label>
            <input type="password" name="pwd" placeholder="Введите пароль">
        </label>
        <label>
            <input type="submit" value="Войти">
        </label>
    </form>
    <a class="close-modal" href="#">X</a>
</section>
<div class="right-spam"></div>
</html>