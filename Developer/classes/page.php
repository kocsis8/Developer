<?php

namespace Classes;

class Page
{
    public static function ShowBegin()
    {
        echo '<!DOCTYPE html>
            <head>
                <meta charset="UTF-8">
                <title>Page</title>
                <link rel="stylesheet" href="res/style.css">
            </head>
            <body>
            
            <div class="topnav" id="myTopnav">
                <a  href="index.php">Home</a>
                <a href="?page=User_list">User list</a>
               <a href="?page=Advertisement_list">Advertisement list</a>
                </div>';
    }

    public static function ShowEnd()
    {
        echo '<div class="footer">
<p>made by: Kocsis Márton Pál</p>
</div>

</body>
</html>';
    }
}