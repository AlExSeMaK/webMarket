<?php


namespace Aleksei\WebShop\Controllers;


use Aleksei\WebShop\Base\Controller;
use Aleksei\WebShop\services\PictureService;
use Aleksei\WebShop\services\ProductService;

class IndexController extends Controller
{
    private $productService;
    private $pictureService;
    public function __construct()
    {
        $this->productService = new ProductService();
        $this->pictureService = new PictureService();
    }

    public function indexAction(){
        $res_data = $this->productService->showDiscounts();
        $content = 'main.php';
        $data = [
            'page_title' => 'Главная',
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }


    public function catalogAction(){
        $content = 'Catalog.php';
        $data_css = 'catalog.css';
        $data = [
            'page_title' => 'Каталог',
            'data_css' => $data_css,

        ];
        return $this->generateResponse($content, $data);
    }

    public function acsessyarsAction(){
        $res_data = $this->productService->showAcsessyars();
        $content = 'acsessyars.php';
        $data_css = 'acsessyars.css';
        $data = [
            'page_title' => 'Аксесуары',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function computersAction(){
        $res_data = $this->productService->showComputers();
        $content = 'computer.php';
        $data_css = 'computer.css';
        $data = [
            'page_title' => 'Компьютеры',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function laptopsAction(){
        $res_data = $this->productService->showLaptops();
        $content = 'laptops.php';
        $data_css = 'laptops.css';
        $data = [
            'page_title' => 'Ноутбуки',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function office_equipmentAction(){
        $res_data = $this->productService->showOffice_equipment();
        $content = 'office_equipment.php';
        $data_css = 'office_equipment.css';
        $data = [
            'page_title' => 'Оргтехника',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function padsAction(){
        $res_data = $this->productService->showPads();
        $content = 'pads.php';
        $data_css = 'pads.css';
        $data = [
            'page_title' => 'Планшеты',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function smartphonesAction(){
        $res_data = $this->productService->showSmartphones();
        $content = 'smartphones.php';
        $data_css = 'smartphones.css';
        $data = [
            'page_title' => 'Смартфоны',
            'data_css' => $data_css,
            '$res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }




}