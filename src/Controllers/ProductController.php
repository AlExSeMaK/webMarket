<?php


namespace Aleksei\WebShop\Controllers;


use Aleksei\WebShop\Base\Controller;
use Aleksei\WebShop\Base\Request;
use Aleksei\WebShop\services\PictureService;
use Aleksei\WebShop\services\ProductService;


class ProductController extends Controller
{
    private $productService;
    private $pictureService;
    public function __construct()
    {
        $this->productService = new ProductService();
        $this->pictureService = new PictureService();
    }

    public function addProductAction(Request $request){

        $product_data = $request->post();
        $title = $request->post()['title'];
        $img = $this->pictureService->upload($title, 'D:\Program Files (x86)\OpenServer\domains\webMarket\public\static\img\productImg\t1');
        array_push($product_data, $img);



        $answer = $this->productService->addProduct($request->post());
        $content = 'admin.php';
        $data = [
            'page_title' => 'Управление',
            'answer' => $answer
        ];
        return $this->generateResponse($content, $data);
    }

    public function desctopAction(){
        $res_data = $this->productService->showDesctop();
        $content = 'computer.php';
        $data_css = 'computer.css';
        $data = [
            'page_title' => 'Компьютеры',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function gameLaptopAction(){
        $res_data = $this->productService->showGameLaptop();
        $content = 'laptops.php';
        $data_css = 'laptops.css';
        $data = [
            'page_title' => 'Ноутбуки',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function microComputerAction(){
        $res_data = $this->productService->showMicroComputer();
        $content = 'computer.php';
        $data_css = 'computer.css';
        $data = [
            'page_title' => 'Компьютеры',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function laptopPadAction(){
        $res_data = $this->productService->showLaptopPad();
        $content = 'laptops.php';
        $data_css = 'laptops.css';
        $data = [
            'page_title' => 'Ноутбуки',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function smartPhoneAction(){
        $res_data = $this->productService->showSmartPhone();
        $content = 'smartphones.php';
        $data_css = 'smartphones.css';
        $data = [
            'page_title' => 'Телефоны',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }
    public function buttonPhoneAction(){
        $res_data = $this->productService->showButtonPhone();
        $content = 'smartphones.php';
        $data_css = 'smartphones.css';
        $data = [
            'page_title' => 'Телефоны',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function appleAction(){
        $res_data = $this->productService->showApple();
        $content = 'pads.php';
        $data_css = 'pads.css';
        $data = [
            'page_title' => 'Планшеты',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function androidAction(){
        $res_data = $this->productService->showAndroid();
        $content = 'pads.php';
        $data_css = 'pads.css';
        var_dump($res_data);
        $data = [
            'page_title' => 'Планшеты',
            'data_css' => $data_css,
            'res_data' => $res_data
        ];
        return $this->generateResponse($content, $data);
    }

    public function computersByNameAction(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showComputersByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }

    public function laptopsByName(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showLaptopsByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }

    public function smartphonesByName(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showSmartphonesByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }

    public function padsByName(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showPadsByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }

    public function acsessyarsByName(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showAcsessyarsByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }

    public function office_equipmentByName(Request $request){
        $name = $request->params()['name'];
        $res_data = $this->productService->showOffice_equipmentByName($name);
        $id = $res_data['0']['idproduct'];
        $photos = $this->productService->showPhotocs($id);
        $content = 'marketplase.php';
        $data_css = 'marcetplase.css';
        $data = [
            'page_title' => $res_data['product_name'],
            'data_css' => $data_css,
            'res_data' => $res_data,
            'photos' => $photos
        ];
        return $this->generateResponse($content, $data);
    }
}