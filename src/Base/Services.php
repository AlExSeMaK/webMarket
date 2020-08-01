<?php


namespace Aleksei\WebShop\Base;

use Aleksei\WebShop\Base\DBConnection;

class Services
{
    protected $dbConnection;

    public function __construct() {
        $this->dbConnection = DBConnection::getInstance();
    }


}