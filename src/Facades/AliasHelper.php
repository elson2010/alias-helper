<?php

namespace elson2010\aliashelper\Facades;

use Illuminate\Support\Facades\Facade;

class AliasHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alias-helper';
    }
}
