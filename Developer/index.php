<?php

spl_autoload_register(function ($class){
    $class = strtolower($class);
    $class = str_replace("\\","/",$class);
    require_once $class.".php";
});



use Classes\Page;
use Classes\Req;
use Classes\Controller;

Page::ShowBegin();

$page = Req::GetPage();

switch ($page)
{
    case "User_list":
        Controller\UserListController::Main();
        break;
    case "Advertisement_list":
        Controller\AdvertisementListController::Main();
        break;
    default:
        Controller\pagecontroller::Main($page);
}

Page::ShowEnd();


