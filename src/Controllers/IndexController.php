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
}