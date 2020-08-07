<main>
<section>
    <h2>Добавление товара</h2>
    <h3><? echo $answer ?></h3>
    <form action="/add/product" method="post" enctype="multipart/form-data">
        <div>
            <label>
                Категория:
                <select name="id_category">
                    <option value=1>Комьпьютер</option>
                    <option value=2>Ноутбук</option>
                    <option value=3>Смартфон</option>
                    <option value=4>Планшет</option>
                    <option value=5>Оргтехника</option>
                    <option value=6>Аксесуары</option>
                </select>
            </label>
        </div>
        <div>
            <label>Название товара:
                <input type="text" name="product_name">
            </label>
        </div>
        <div>
            <label>Описание товара:
                <textarea name="product_info"></textarea>
            </label>
        </div>
        <div>
            <label>Количество товаров:
                <input type="number" name="count">
            </label>
        </div>
        <div>
            <label>Цена:
                <input type="number" name="price">
            </label>
        </div>
        <div>
            <label>Производитель:
                <input type="text" name="company">
            </label>
        </div>
        <div>
            <label>Тип устройства:
                <select name="type">
                    <option value="desktop_computer">Настольный компьютер</option>
                    <option value="micro_computer">Микрокомпьютер</option>
                    <option value="nettop">Неттоп</option>
                    <option value="game_laptop">Игровой ноутбук</option>
                    <option value="laptop">laptop</option>
                    <option value="laptop_pad">Ноутбук планшет</option>
                    <option value="laptop_transformer">Ноутбук трансформер</option>
                    <option value="type_telephone_push_button">Кнопочный телефон</option>
                    <option value="printer">Принтер</option>
                    <option value="scanner">Сканер</option>
                    <option value="fax">факс</option>
                    <option value="projector">Проектор</option>
                    <option value="laminate">Ламинатор</option>
                    <option value="3d_printer">3D принтер</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Линейка процессора
                <select name="processor_line">
                    <option value="intel_core_i5">intel cor i5</option>
                    <option value="intel_core_i7">intel cor i7</option>
                    <option value="intel_core_i3">intel cor i3</option>
                    <option value="amd_ryzen_5">amd ryzen i5</option>
                    <option value="intel_core_i9">intel cor i9</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Количество ядер в процессоре
                <select name="cores_in_processor">
                    <option value=4>4</option>
                    <option value=8>8</option>
                    <option value=6>6</option>
                    <option value=2>2</option>
                    <option value=1>1</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Количество оперативной памяти
                <select name="operation_member">
                    <option value=8>8 ГБ</option>
                    <option value=16>16 ГБ</option>
                    <option value=32>32 ГБ</option>
                    <option value=4>4 ГБ</option>
                    <option value=64>64 ГБ</option>
                    <option value=1>1 ГБ</option>
                    <option value=2>2 ГБ</option>
                    <option value=3>3 ГБ</option>
                    <option value=4>4 ГБ</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Тип видеопамяти
                <select name="type_video_member">
                    <option value="Встроеная">Встроеная</option>
                    <option value="Дискретная">Дискретная</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Обьём видеопамяти
                <select name="video_member">
                    <option value=8>8 ГБ</option>
                    <option value=2>2 ГБ</option>
                    <option value=6>6 ГБ</option>
                    <option value=4>4 ГБ</option>
                    <option value=11>11 ГБ</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Конфигурация накопителя
                <select name="type_member">
                    <option value="eMMC">eMMC</option>
                    <option value="HDD">HDD</option>
                    <option value="HDD+SDD">HDD + SDD</option>
                    <option value="SDD">SDD</option>
                    <option value="none_drive">Без накопителя</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Обьём памяти
                <select name="sum_member">
                    <option value="1 TB">1 ТВ</option>
                    <option value="2 TB">2 ТВ</option>
                    <option value="3 TB">3 ТВ</option>
                    <option value="4 TB">4 ТВ</option>
                    <option value="500 ГБ">500 ГБ</option>
                    <option value="120 ГБ">120 ГБ</option>
                    <option value="480 ГБ">480 ГБ</option>
                    <option value="240 ГБ">240 ГБ</option>
                    <option value="960 ГБ">960 ГБ</option>
                    <option value="256 ГБ">256 ГБ</option>
                    <option value="16 ГБ">16 ГБ</option>
                    <option value="32 ГБ">32 ГБ</option>
                    <option value="8 ГБ">8 ГБ</option>
                    <option value="64 ГБ">64 ГБ</option>
                    <option value="128 ГБ">128 ГБ</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Операционная система
                <select name="operation_sistem">
                    <option value="Win 10 home">Win 10 home</option>
                    <option value="Отсутствует">Отсутствует</option>
                    <option value="Win 10 Pro">Win 10 Pro</option>
                    <option value="DOS">DOS</option>
                    <option value="Linux">Linux</option>
                    <option value="Android">Android</option>
                    <option value="IOS">Ios</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Размер экрана
                <select name="screen_size">
                    <option value="до 11">до 11"</option>
                    <option value="11-11.9">11"-11,9"</option>
                    <option value="12-12.9">12"-12.9"</option>
                    <option value="13-13.9">13"-13.9"</option>
                    <option value="14-14.9">14"-14.9"</option>
                    <option value="15-15.9">15"-15.9"</option>
                    <option value="16-16.9">16"-16.9"</option>
                    <option value="16-16.9">16"-16.9"</option>
                    <option value="17">17"-и более</option>
                    <option value="3.4">до 3.4"</option>
                    <option value="3.5-4.9">3.5"-4.9"</option>
                    <option value="5.0-5.4">5.0"-5.4"</option>
                    <option value="5.5-5.9">5.5"-5.9"</option>
                    <option value="6.0*6.4">6.0"-6.4"</option>
                    <option value="6.5">6.5" и более</option>
                    <option value="7-7.9">7"-7.9"</option>
                    <option value="9-8.9">8"-8.9"</option>
                    <option value="9-9.7">9"-9.7"</option>
                    <option value="10.1-11">10.1"-11"</option>
                    <option value="11.6">11.6" и выше</option>
                    <option value="7">Менее 7"</option>
                    <option value="">пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Разрешение экрана
                <select name="screen_resolution">
                    <option value="1280x800">1280x800</option>
                    <option value="1024x600">1024x600</option>
                    <option value="1920x1200">1920x1200</option>
                    <option value="2048x1536">2048x1536</option>
                    <option value="320x240">320x240</option>
                    <option value="2340x1080">2340x1080</option>
                    <option value="1440x720">1440x720</option>
                    <option value="1520x720">1520x720</option>
                    <option value="1792x828">1792x828</option>
                    <option value="1920x1080">1920x1080</option>
                    <option value="1366x768">1366x768</option>
                    <option value="1600x900">1600x900</option>
                    <option value="2560x1600">2560x1600</option>
                    <option value="1024x768">1024x768</option>
                    <option value="">пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Обьём батареи
                <select name="battery">
                    <option value="2000-2499">2000-2499 мАч</option>
                    <option value="2500-2999">2500-2999 мАч</option>
                    <option value="3000-3499">3000-3499 мАч</option>
                    <option value="3500-4499">2500-3499 мАч</option>
                    <option value="4500">4500 мАч и выше</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Карта памяти
                <input type="checkbox" value="1" name="card_member">
            </label>
        </div>
        <div>
            <label>NFC
                <input type="checkbox" value="1" name="NFC">
            </label>
        </div>
        <div>
            <label>Две sim-карты
                <input type="checkbox" value="1" name="two_sim">
            </label>
        </div>
        <div>
            <label>gps
                <input type="checkbox" value="1" name="gps">
            </label>
        </div>
        <div>
            <label>Способ доставки
                <select name="type_devilary">
                    <option value="Доставка курьером">Доставка курьером</option>
                    <option value="Самовывоз">Самовывоз</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Время доставки
                <select name="time_devilary">
                    <option value="devilry_time_today">Сегодня</option>
                    <option value="devilry_time_tomorrow">Завтра</option>
                    <option value="devilry_time_five_day">До 5 дней</option>
                    <option value="">Пропустить</option>
                </select>
            </label>
        </div>
        <div>
            <label>Wifi
                <input type="checkbox" value="1" name="Wifi">
            </label>
        </div>
        <div>
            <label>Бесплатная доставка
                <input type="checkbox" value="1" name="free_devilary">
            </label>
        </div>
        <div>
            <label>Скидка
                <input type="checkbox" value="1" name="discount">
            </label>
        </div>
        <div>
            <label>Гарантия производителя
                <input type="checkbox" value="1" name="guarantee">
            </label>
        </div>
        <div>
            <label>Загрузка изображений

                <input type="text" name="title" placeholder="Название">

                <input type="file" accept="image/*" multiple name="picture[]">
            </label>
        </div>
        <input type="submit" value="Добавить">
    </form>
</section>
</main>