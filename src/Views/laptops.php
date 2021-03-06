<main class="main_content_area">
    <div class="grid-69_31 grid-69_p">
        <div class="grid-69 grid-69_pt grid-69_t grid-69_mt">
            <h2>Ноутбуки</h2>
            <div class="flex-row global_search global_search_p global_search_t global_search_mt">
                <form action="#" method="post">
                    <fieldset>
                        <label>
                            <input type="text" placeholder="Поиск">
                        </label>
                    </fieldset>
                </form>
                <div><a href="#"><p>Поиск</p></a></div>
            </div>
            <div class="flex-row flex-row sorted sorted_p sorted_t sorted_mt">
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
                <form name="search" action="#" method="post" class="search-form sear">
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
                            <input type="checkbox" name="maker[]" value="maker_laptop_acer">
                            Acer
                        </label>
                        <label class="flex-row">
                            <input  type="checkbox" name="make[]" value="maker_laptop_appel">
                            Appel
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_asus">
                            ASUS
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_bq">
                            BQ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_huawei">
                            HUAWEI
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_irbis">
                            irbis
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_hp">
                            HP
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_microsoft">
                            Microsoft
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_iru">
                            iRu
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_prestigio">
                            Prestigio
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_lenovo">
                            Lenovo
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="maker[]" value="maker_laptop_Xiomi">
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
                        <legend>Тип ноутбука</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="type_laptop[]" value="game_laptop">
                            Игровой ноутбук
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="type_laptop[]" value="laptop">
                            laptop
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="type_laptop[]" value="laptop_pad">
                            Ноутбук планшет
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="type_laptop[]" value="laptop_transformer">
                            Ноутбук трансформер
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Операционная система</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="Win_10_Home">
                            Windows 10 Home
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="none_OS">
                            OS не указана
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="Win_10_Pro">
                            Windows 10 Pro
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="DOS">
                            DOS
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="Operation_System[]" value="Linux">
                            Linux
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Размер экрана</legend>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="11_size_screen">
                            до 11"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="11-11.9_size_screen">
                            11"-11,9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="12-12.9_size_screen">
                            12"-12.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="13-13.9_size_screen">
                            13"-13.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="14-14.9_size_screen">
                            14"-14.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="15-15.9_size_screen">
                            15"-15.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="16-16.9_size_screen">
                            16"-16.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="16-16.9_size_screen">
                            16"-16.9"
                        </label>
                        <label class="flex-row">
                            <input checked type="checkbox" name="size_screen_laptop[]" value="17_size_screen">
                            17"-и более
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Разрешение экрана</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen_laptop[]" value="resolution_screen_1920x1080">
                            1920х1080
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen_laptop[]" value="resolution_screen_1366x768">
                            1366x7688
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen_laptop[]" value="resolution_screen_1600x900">
                            1600x900
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen_laptop[]" value="resolution_screen_2560x1600">
                            2560x1600
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="resolution_screen_laptop[]" value="resolution_screen_1024x768">
                            1024x768
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Линейка процессоров</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="line_processor[]" value="intel_core_i5">
                            Intel Core i5
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_processor[]" value="intel_core_i7">
                            Intel Core i7
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_processor[]" value="intel_core_i3">
                            Intel Core i3
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_processor[]" value="amd_ryzen_5">
                            AMD Ryzen 5
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="line_processor[]" value="intel_core_i9">
                            Intel Core i9
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Количество ядер процессора</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor_laptop[]" value="4_cores_in_processor">
                            4
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor_laptop[]" value="8_cores_in_processor">
                            8
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor_laptop[]" value="6_cores_in_processor">
                            6
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="stace_cores_in_processor_laptop[]" value="2_cores_in_processor">
                            2
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Оперативная память</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="operation_member[]" value="8g_operation_member">
                            8 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="operation_member[]" value="16g_operation_member">
                            16 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="operation_member[]" value="32g_operation_member">
                            32 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="operation_member[]" value="4g_operation_member">
                            4 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="operation_member[]" value="64g_operation_member">
                            64 ГБ
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Тип видеопамяти</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="video_member[]" value="integrated_video_member">
                            Встроеная
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="video_member[]" value="discrete_video_member">
                            Дискретная
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Обьём видеопамяти</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_video_member[]" value="8_gig_video_member">
                            8 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_video_member[]" value="2_gig_video_member">
                            2 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_video_member[]" value="6_gig_video_member">
                            6 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_video_member[]" value="4_gig_video_member">
                            4 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_video_member[]" value="11_gig_video_member">
                            11 ГБ
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Конфигурации накопителя</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="configuration_drive[]" value="eMMC">
                            eMMC
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="configuration_drive[]" value="HDD">
                            HDD
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="configuration_drive[]" value="HDD+SDD">
                            HDD + SDD
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="configuration_drive[]" value="SDD">
                            SDD
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="configuration_drive[]" value="none_drive">
                            Без накопителя
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Общий объём накопителей</legend>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_HDD[]" value="1_TB">
                            1 TB
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_HDD[]" value="2_TB">
                            2 TB
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_HDD[]" value="3_TB">
                            3 TB
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_HDD[]" value="4_TB">
                            4 TB
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_HDD[]" value="500_Gig">
                            500 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_SSD[]" value="120_Gig">
                            120 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_SSD[]" value="480_Gig">
                            480 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_SSD[]" value="240_Gig">
                            240 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_SSD[]" value="960_Gig">
                            960 ГБ
                        </label>
                        <label class="flex-row">
                            <input type="checkbox" name="volume_SSD[]" value="256_Gig">
                            256 ГБ
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
                        <label class="flex-row">
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
