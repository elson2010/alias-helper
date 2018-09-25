<?php

if(!function_exists('controller')) {

    /**
     *
     */
    function controller($alias, $action = null) {
        if($action) {
            return config('alias-helper')['controllers'][$alias] . '@' . $action;
        }
        return config('alias-helper')['controllers'][$alias];
    }
}


if(!function_exists('model')) {

    function model($alias) {
        return config('alias-helper')['models'][$alias];
    }
}
