<?php

namespace plugin\aoaostar_com\qrcode;

use plugin\Drive;

class App implements Drive
{


    public function Index()
    {
        return msg("ok","success");
    }
}