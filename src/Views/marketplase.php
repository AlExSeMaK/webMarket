<main class="main_content_area">
    <div class="production_p production_t production_tm">
        <h1><? echo $res_data['0']['product_name'];?></h1>
        <div class="container_gallery p t tm">
            <div class="grid_gallery container_gallery_p container_gallery_t container_gallery_mt">
                <div class="big_market_photo_area">
                    <div class="big_market_photo"><img src="/static/img/pic/<? echo $res_data['0']['product_main_photo']?>"></div>
                </div>
                <? foreach ($photos as $photo): ?>
                <div>
                    <div class="min_market_photo_area_5 min_market_photo"><img src="/static/img/productImg/<? echo $photo['photos_name']?>"></div>
                </div>
                <? endforeach; ?>
            </div>
        </div>
        <h2>Описание товара</h2>
        <div>
            <p><? echo $res_data['0']['product_info'];?></p>
        </div>
        <h2>Технические характеристики</h2>
        <div>
            <ul>
                <li><? echo $res_data['0']['company'];?></li>
                <li><? echo $res_data['0']['processor_line'];?></li>
                <li><? echo $res_data['0']['cores_in_processor'];?></li>
                <li><? echo $res_data['0']['operation_member'];?></li>
                <li><? echo $res_data['0']['type_video_member'];?></li>
                <li><? echo $res_data['0']['video_member'];?></li>
                <li><? echo $res_data['0']['type_member'];?></li>
                <li><? echo $res_data['0']['sum_member'];?></li>
                <li><? echo $res_data['0']['operation_sistem'];?></li>
                <li><? echo $res_data['0']['wifi'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['free_devilary'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['guarantee'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['type_devilary']?></li>
                <li><? echo $res_data['0']['time_devilary']?></li>
                <li><? echo $res_data['0']['screen_resolution']?></li>
                <li><? echo $res_data['0']['battery']?></li>
                <li><? echo $res_data['0']['card_member'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['nfc'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['two_sim'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['gps'] ? 'есть': 'нет'?></li>
                <li><? echo $res_data['0']['camera']?></li>
            </ul>
        </div>

        <h3>Оставить коментарий</h3>
        <div class="flex-column">
            <div class="flex-100%"><textarea placeholder="Введите текст коментария"></textarea></div>
            <div class="flex-100%"><input type="submit" value="Отрпавить"></div>
        </div>
        <div class="grid_comment comment_card">
            <div class="photo_area"><img src="https://picsum.photos/700"></div>
            <div class="name_area"><h5>Имя коментатора</h5></div>
            <div class="date_area"><h5>30.10.1995</h5></div>
            <div class="text_area"><p>Текст коментатора</p></div>
            <div class="button_area"><h5>Читать полнстью</h5></div>
        </div>
    </div>
</main>
