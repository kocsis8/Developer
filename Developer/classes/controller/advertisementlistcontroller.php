<?php

namespace Classes\Controller;

use Classes\Model\AdvertisementModel;
use Classes\View\AdvertisementListView;

class AdvertisementListController
{
    public static function Main()
    {
        $advertisements = AdvertisementModel::GetAdvertisemens();
        AdvertisementListView::ShowAdvertisementList($advertisements);
    }
}