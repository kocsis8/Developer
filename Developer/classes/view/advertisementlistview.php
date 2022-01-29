<?php

namespace Classes\View;

class AdvertisementListView
{
    public static function ShowAdvertisementList($advertisements)
    {
        echo '<h1>Advertisements</h1>';

        foreach ($advertisements as $advertisement)
        {
            echo '<li>'. $advertisement['id'] .' '. $advertisement['user_id'].' '. $advertisement['text'];
        }
        echo '</li>';
    }
}
