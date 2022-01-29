<?php

namespace Classes\Model;

class UserModel
{

    public static function GetUser()
    {
        return Db::Select("users");
    }
}