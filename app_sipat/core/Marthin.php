<?php

/**
 * 
 */

namespace Marthin;

class Marthin
{

    public function get_cookie($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        } else {
            return false;
        }
    }
}
