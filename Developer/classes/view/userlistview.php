<?php

namespace Classes\View;

class UserListView{

    public static function ShowUserList($users)
    {
        echo '<h1>Users list</h1>';

        foreach ($users as $user)
        {
        echo '<li>'. $user['id'] .' '. $user['name'];
        }
        echo '</li>';
    }
}