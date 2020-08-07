<?php


namespace Aleksei\WebShop\Controllers;


use Aleksei\WebShop\Base\Controller;

class AdminController extends Controller
{
    public function adminAction(){
        $content = 'admin.php';
        $data = [
            'page_title' => 'Управление'
        ];
        return $this->generateResponse($content, $data);
    }
}