<main class="main_content_area">
    <div class="grid-69_31 grid-69_p">
        <div class="grid-69 grid-69_pt grid-69_t grid-69_mt">
            <h2>Планшеты</h2>
            <div class="flex-row global_search global_search_p global_search_t global_search_mt">
                <form action="#" method="post">
                    <fieldset>
                        <label>
                            <input type="text" placeholder="Поиск">
                        </label>
                    </fieldset>
                </form>
                <div><a href="№"><p>Поиск</p></a></div>
            </div>
            <div class="flex-row sorted sorted_p sorted_t sorted_mt">
                <h5>Сортировать:</h5>
                <a href="#"><p>по популярности</p></a>
                <a href="#"><p>по цене</p></a>
                <a href="#"><p>по рейтенгу</p></a>
                <a href="#"><p>по отзывам</p></a>
                <a href="#"><p>по размеру скидки</p></a>
                <a href="#"><p>по новизне</p></a>
            </div>
            <? foreach ($res_data as $res): ?>
                <div class="sel-cards">
                    <div class="flex-column flex-10">
                        <div class="flex-row">
                            <div class="flex-2"><a href="/computersByName/<? echo $res['name']; ?>"><img src="/static/img/pic/<? echo $res['product_main_photo']; ?>"></a></div>
                            <div class="flex-column flex-10">
                                <div class="flex-2"><a href="/computersByName/<? echo $res['name']; ?>"><h4><? echo $res['product_name']; ?></h4></a></div>
                                <div class="flex-8"><a href="/computersByName/<? echo $res['name']; ?>"><p><? echo $res['product_info']; ?></p></a></div>
                                <div class="flex-8"><a href="/computersByName/<? echo $res['name']; ?>"><p><? echo $res['price']; ?></p></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
            <div class="flex-row">
                <div><a href="#"><p>1</p></a></div>
                <div><a href="#"><p>2</p></a></div>
                <div><a href="#"><p>3</p></a></div>
                <div><a href="#"><p>4</p></a></div>
                <div><a href="#"><p>5</p></a></div>
                <div><a href="#"><p>Далее</p></a></div>
            </div>

        </div>
        <div class="grid-31 grid-31_p" id="search">
            <div>
                <form name="search" action="#" method="post" class="search-form">
                    <div><h4>Расширеный поиск</h4></div>
                    <div><a class="close-search" href="#">скрыть</a></div>
                    <fieldset>
                        <legend>Цена, Р</legend>
                        <label class="flex-row">
                            <input class="" type="text"  placeholder="от 150" value="min_price">
                            <input type="text"  placeholder="до  850 000" value="max_price">
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="price" value="price_with_devilry">
                            C учётом доставки
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="price" value="price_with_self_devilry">
                            С учётом самовывоза
                        </label>
                        <label class="flex-row">
                            <input checked type="radio" name="price" value="price_with_not_devilry">
                            Без учёта доставкии
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Производитель</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_arian">
                            Arian
                        </label>
                        <label class="flex-row">
                            <input  type="checkbox" name="make[]" value="maker_pad_appel">
                            Appel
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_asus">
                            ASUS
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_bq">
                            BQ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_huawei">
                            HUAWEI
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_irbis">
                            irbis
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_hp">
                            HP
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_samsung">
                            Samsung
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_iru">
                            iRu
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_prestigio">
                            Prestigio
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_lenovo">
                            Lenovo
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_pad_Xiomi">
                            Xiomi
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="flex-row">
                            <input checked type="checkbox" name="maker[]" value="in_market">
                            В продаже
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Линейка</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="line_pad[]" value="huawei_mediapad">
                            HUAWEI MediaPad
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_pad[]" value="digma_plane">
                            DIGMA Plane
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_pad[]" value="apple_ipad_mini">
                            Apple_iPad mini
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Платформа</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="android">
                            Android
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="ios">
                            IOS
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Размер экрана</legend>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen[]" value="7-7.9_size_screen">
                            7"-7.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen[]" value="9-8.9_size_screen">
                            8"-8.9"
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_screen[]" value="9-9.7_size_screen">
                            9"-9.7"
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_screen[]" value="10.1-11_size_screen">
                            10.1"-11"
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_screen[]" value="11.6_size_screen">
                            11.6" и выше
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen[]" value="7_size_screen">
                            Менее 7"
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Разрешение экрана</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen[]" value="resolution_screen_1280x800">
                            1280x800
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen[]" value="resolution_screen_1024x600">
                            1024x600
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen[]" value="resolution_screen_1920x1200">
                            1920x1200
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen[]" value="resolution_screen_2048x1536">
                            2048x1536
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Количество ядер процессора</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor[]" value="4_cores_in_processor">
                            4
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor[]" value="8_cores_in_processor">
                            8
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor[]" value="6_cores_in_processor">
                            6
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor[]" value="2_cores_in_processor">
                            2
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor[]" value="1_cores_in_processor">
                            1
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Размер оперативной памяти</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="size_operation_member[]" value="1g_operation_member_pad">
                            1 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_operation_member[]" value="2g_operation_member_pad">
                            2 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_operation_member[]" value="3g_operation_member_pad">
                            3 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_operation_member[]" value="4g_operation_member_pad">
                            4 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="size_operation_member[]" value="8g_operation_member_pad">
                            8 ГБ
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Размер встроеной памяти</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="integer_member_phone[]" value="16_Gig">
                            16 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="integer_member_pad_phone[]" value="32_Gig">
                            32 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="integer_member_pad_phone[]" value="8_Gig">
                            до 8 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="integer_member_phone[]" value="64_Gig">
                            64 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="integer_member_phone[]" value="128_Gig">
                            128 ГБ
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="flex-row">
                            <input type="checkbox" name="socket_member_card_pad" value="socket_member_card_pad">
                            Слот для карты памяти
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>4G LTE</legend>
                        <label class="flex-row">
                            <input type="radio" name="4g_in_pad" value="4g_in_pad_yes">
                            Да
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="4g_in_pad" value="4g_in_pad_no">
                            Нет
                        </label>
                        <label class="flex-row">
                            <input checked type="radio" name="4g_in_pad" value="4g_in_pad_all">
                            Неважно
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="flex-row">
                            <input type="checkbox" name="gps_in_pad" value="gps_in_pad">
                            GPS
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Стоимость доставки</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="devilry" value="devilry_free">
                            Бесплатная доставка
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Скидки и акции</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="stock[]" value="discount">
                            Скидки
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stock[]" value="promo_code">
                            Промокоды
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="flex-row">
                            <label>
                                <input type="checkbox" name="guarantee" value="guarantee">
                                Гарантия производителя
                            </label>
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Способ доставки</legend>
                        <label class="flex-row">
                            <input type="radio" name="devilry_way" value="curer_devilry">
                            Доставка курьером
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="devilry_way" value="self_devilry">
                            Самовывоз
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Срок доставки курьером</legend>
                        <label class="flex-row">
                            <input type="radio" name="devilry_time" value="devilry_time_today">
                            Сегодня
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="devilry_time" value="devilry_time_tomorrow">
                            Завтра
                        </label>
                        <label class="flex-row">
                            <input type="radio" name="devilry_time" value="devilry_time_five_day">
                            До 5 дней
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Способ оплаты</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="pay[]" value="pay_card_web">
                            Картой на сайте
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="pay[]" value="pay_card_courier">
                            Оплата картой курьеру
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="pay[]" value="cash_courier">
                            Наличными курьеру
                        </label>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>
