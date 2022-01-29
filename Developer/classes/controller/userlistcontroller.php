<?php

namespace Classes\Controller;

use Classes\Model\UserModel;
use Classes\View\UserListView;

class UserListController
{
    public static function Main()
    {
        $users = UserModel::GetUser();
        UserListView::ShowUserList($users);
    }
}