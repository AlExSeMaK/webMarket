<main class="main_content_area">
    <div class="grid-69_31 grid-69_p">
        <div class="grid-69 grid-69_pt grid-69_t grid-69_mt">
            <h2>Оргтехника</h2>
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
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="printer">
                            Принтеры
                        </label>
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="scanner">
                            Сканеры
                        </label>
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="fax">
                            Факс
                        </label>
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="projector">
                            Проектор
                        </label>
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="laminate">
                            Ламинаторы
                        </label>
                        <label class="flex-row">
                            <input name="office_equipment[]" type="checkbox" value="3d_printer">
                            3D-принтеры
                        </label>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>
dw