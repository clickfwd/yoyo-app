<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Upload extends Component
{
    protected function getImageProperty()
    {
        if (empty($_FILES['photo']['tmp_name'])) {
            return '';
        }

        $tmp = $_FILES['photo']['tmp_name'];

        $str = file_get_contents($tmp);

        return base64_encode($str);
    }
}
