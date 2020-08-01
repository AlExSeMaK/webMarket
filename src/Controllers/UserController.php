<?php


namespace Aleksei\WebShop\Controllers;


use Aleksei\WebShop\Base\Controller;
use Aleksei\WebShop\Base\Request;
use Aleksei\WebShop\services\AccountService;

class UserController extends Controller
{
    private $accountService;
    public function __construct()
    {
        $this->accountService = new AccountService();
    }
    public function regUserAction(Request $request){
        $content = 'form_reg.php';
        $templateReg = 'templateReg.php';
        $data_css = 'form_reg.css';
        $result = $this->accountService->addUserService($request->post());
        $data = [
            'page_title' => 'Регистрация',
            'data_css' => $data_css,
            'result' => $result
        ];
        return $this->generateResponse($content, $data, $templateReg);
    }

    public function showRegAction(Request $request){
        $content = 'form_reg.php';
        $templateReg = 'templateReg.php';
        $data_css = 'form_reg.css';
        $data = [
            'page_title' => 'Регистрация',
            'data_css' => $data_css
        ];
        return $this->generateResponse($content, $data, $templateReg);
    }


}