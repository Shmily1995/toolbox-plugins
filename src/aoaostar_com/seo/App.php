<?php

namespace plugin\aoaostar_com\seo;

use plugin\Drive;

class App implements Drive
{
    public function Index()
    {
        return msg("ok", "success");
    }
}