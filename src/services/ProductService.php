<?php


namespace Aleksei\WebShop\services;


use Aleksei\WebShop\Base\Services;
use Exception;
use http\Params;

class ProductService extends Services
{
    const ADD_PRODUCT_SUCCESS = 'Товар успешно добавлен';
    const ADD_PRODUCT_ERROR = 'Ошибка добавления';

    public function addProduct($product_data){
       $product_name = $product_data['product_name'];
       $product_info = $product_data['product_info'];
       $count = $product_data['count'];
       $category_idcategory = $product_data['id_category'];
       $product_photos = $product_data['0'];


       $price = $product_data['price'];
       $company = $product_data['company'];
       $type = $product_data['type'];
       $processor_line = $product_data['processor_line'];
       $cores_in_processor = $product_data['cores_in_processor'];
       $operacion_memder = $product_data['operation_member'];
       $type_video_member = $product_data['type_video_member'];
       $video_member = $product_data['video_member'];
       $type_member = $product_data['type_member'];
       $sum_member = $product_data['sum_member'];
       $operation_sistem = $product_data['operation_sistem'];
       $wifi = $product_data['Wifi'];
       $free_devilary = $product_data['free_devilary'];
       $discounts = $product_data['discount'];
       $guarantee = $product_data['guarantee'];
       $type_devilary = $product_data['type_devilary'];
       $time_devilary = $product_data['time_devilary'];
       $screen_size = $product_data['screen_size'];
       $screen_resolution = $product_data['screen_resolution'];
       $battery = $product_data['battery'];
       $card_member = $product_data['card_member'];
       $nfc = $product_data['NFC'];
       $two_sim = $product_data['two_sim'];
       $gps = $product_data['gps'];
       $camera = $product_data['camera'];

       $product_photos = serialize($product_photos);


       $product_sql = 'insert into product(product_name, product_info, count, category_idcategory, product_photo, product_main_photo)
                       values (:product_name, :product_info, :count, :category_idcategory, :product_photo, :product_main_photo)';
       $product_info_sql = 'insert into product_info(price, company, type, processor_line, cores_in_processor, operacion_memder,
                            type_video_member, video_member, type_member, sum_member, operation_sistem, wifi, free_devilary,
                            discounts, guarantee, type_devilary, time_devilary, screen_size, screen_resolution, battery, 
                            card_member, nfc, two_sim, gps, camera, product_idproduct)
                            value (:price, :company, :type, :processor_line, :cores_in_processor, :operacion_memder,
                            :type_video_member, :video_member, :type_member, :sum_member, :operation_sistem, :wifi, :free_devilary,
                            :discounts, :guarantee, :type_devilary, :time_devilary, :screen_size, :screen_resolution, :battery, 
                            :card_member, :nfc, :two_sim, :gps, :camera, :product_idproduct)';
       /*try {*/
       $this->dbConnection->getConnection()->beginTransaction();
       $product_params = [
           'product_name' => $product_name,
           'product_info' => $product_info,
           'count' => $count,
           'category_idcategory' => $category_idcategory,
           'product_photo' => $product_photos,
           'product_main_photo' => $product_photos
       ];
       $this->dbConnection->executeSql($product_sql, $product_params);

       $product_info_params = [
           'price' => $price,
           'company' => $company,
           'type' => $type,
           'processor_line' => $processor_line,
           'cores_in_processor' => $cores_in_processor,
           'operation_memder' => $operacion_memder,
           'type_video_member' => $type_video_member,
           'video_member' => $video_member,
           'type_member' => $type_member,
           'sum_member' => $sum_member,
           'operation_sistem' => $operation_sistem,
           'wifi' => $wifi,
           'free_devilary' => $free_devilary,
           'discounts' => $discounts,
           'guarantee' => $guarantee,
           'type_devilary' => $type_devilary,
           'time_devilary' => $time_devilary,
           'screen_size' => $screen_size,
           'screen_resolution' => $screen_resolution,
           'battery' => $battery,
           'card_member' => $card_member,
           'nfc' => $nfc,
           'two_sim' => $two_sim,
           'gps' => $gps,
           'camera' => $camera,
           'product_idproduct' => $this->dbConnection->getConnection()->lastInsertId()
       ];
       $this->dbConnection->executeSql($product_info_sql, $product_info_params);

       $this->dbConnection->getConnection()->commit();
       //return self::ADD_PRODUCT_SUCCESS;
       /*}catch (Exception $exception){
           $this->dbConnection->getConnection()->rollBack();
           return self::ADD_PRODUCT_ERROR;
       }*/
    }

    public function showDesctop(){
        $sql = "select * from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Настольный компьютер'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showMicroComputer()
    {
        $sql = "select * from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Микрокомпьютер'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showLaptopPad()
    {
        $sql = "select * from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Ноутбук планшет'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showSmartPhone()
    {
        $sql = "select * from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Смартфон'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showButtonPhone()
    {
        $sql = "select * from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Кнопочный телефон'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showApple()
    {
        $sql = "select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.operation_sistem = 'Ios'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showAndroid()
    {
        $sql = "select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.operation_sistem = 'Android'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showGameLaptop()
    {
        $sql = "select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory and product.idproduct = product_info.product_idproduct and product_info.type = 'Игровой ноутбук'";
        return $this->dbConnection->queryAll($sql);
    }

    public function showAcsessyars()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 6 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showComputers()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 1 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showLaptops()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 2 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showOffice_equipment()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 5 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showPads()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 4 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showSmartphones()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 3 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showComputersByName($name)
    {
        $sql = 'select * from product, category, product_info, photos where product.category_idcategory = category.idcategory = 1 and product.idproduct = product_info.product_idproduct and product.product_name = :name and photos.product_id = idproduct';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showLaptopsByName($name)
    {
        $sql = 'select * from product, category, product_info where product.category_idcategory = category.idcategory = 2 and product.idproduct = product_info.product_idproduct and product.product_name = :name';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showSmartphonesByName($name)
    {
        $sql = 'select * from product, category, product_info where product.category_idcategory = category.idcategory = 3 and product.idproduct = product_info.product_idproduct and product.product_name = :name';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showPadsByName($name)
    {
        $sql = 'select * from product, category, product_info where product.category_idcategory = category.idcategory = 4 and product.idproduct = product_info.product_idproduct and product.product_name = :name';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showAcsessyarsByName($name)
    {
        $sql = 'select * from product, category, product_info where product.category_idcategory = category.idcategory = 6 and product.idproduct = product_info.product_idproduct and product.product_name = :name';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showOffice_equipmentByName($name)
    {
        $sql = 'select * from product, category, product_info where product.category_idcategory = category.idcategory = 5 and product.idproduct = product_info.product_idproduct and product.product_name = :name';
        $params = [
            'name' => $name
        ];
        return $this->dbConnection->execute($sql, $params);
    }

    public function showDiscounts()
    {
        $sql = 'select product_name, product_info, product_main_photo, price from product, category, product_info where product.category_idcategory = category.idcategory = 1 and product.idproduct = product_info.product_idproduct';
        return $this->dbConnection->queryAll($sql);
    }

    public function showPhotocs($id)
    {
        $sql = 'select photos_name from photos  where product_id = :id';
        $params = [
              'id' => $id
        ];
        return $this->dbConnection->execute($sql, $params);
    }
}