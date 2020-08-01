<?php


namespace Aleksei\WebShop\Controllers;


use Aleksei\WebShop\Base\Controller;

class IndexController extends Controller
{
    public function indexAction(){
        $content = 'main.php';
        $data = [
            'page_title' => 'Главная'
        ];
        return $this->generateResponse($content, $data);
    }

    public function catalogAction(){
        $content = 'Catalog.php';
        $data_css = 'catalog.css';
        $data = [
            'page_title' => 'Каталог',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function acsessyarsAction(){
        $content = 'acsessyars.php';
        $data_css = 'acsessyars.css';
        $data = [
            'page_title' => 'Аксесуары',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function computersAction(){
        $content = 'computer.php';
        $data_css = 'computer.css';
        $data = [
            'page_title' => 'Компьютеры',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function laptopsAction(){
        $content = 'laptops.php';
        $data_css = 'laptops.css';
        $data = [
            'page_title' => 'Ноутбуки',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function office_equipmentAction(){
        $content = 'office_equipment.php';
        $data_css = 'office_equipment.css';
        $data = [
            'page_title' => 'Оргтехника',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function padsAction(){
        $content = 'pads.php';
        $data_css = 'pads.css';
        $data = [
            'page_title' => 'Планшеты',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }

    public function smartphonesAction(){
        $content = 'smartphones.php';
        $data_css = 'smartphones.css';
        $data = [
            'page_title' => 'Смартфоны',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data);
    }




}