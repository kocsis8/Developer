<?php

namespace Classes\Model;

class AdvertisementModel
{
    public static function GetAdvertisemens()
    {
        return Db::Select("advertisements, users","advertisements.ID, users.name,  advertisements.title", "advertisements.userid = users.ID");

    }
}
