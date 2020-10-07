<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Upload extends Component
{
    protected $error;

    protected function getImageProperty()
    {
        if (empty($_FILES['photo']['tmp_name'])) {
            return '';
        }

        if (! $this->isImage($_FILES['photo'])) {
            $this->error = 'Not a valid image';

            return;
        }

        $tmp = $_FILES['photo']['tmp_name'];

        $str = file_get_contents($tmp);

        return base64_encode($str);
    }

    protected function getErrorProperty()
    {
        return $this->error;
    }

    protected function isImage($file)
    {
        $whitelist_type = ['image/jpeg', 'image/png', 'image/gif'];

        $error = null;

        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);

        if (in_array(finfo_file($fileinfo, $file['tmp_name']), $whitelist_type)) {
            return true;
        }

        return false;
    }
}
