<?php

namespace App\Libraries;

class CIAuth
{
    public static function setCIAuth($result)
    {
        $session = session();
        $array = ['logged_in' => true];
        $userData = $result;
        $session->set('userData', $userData);
        $session->set($array);
    }

    public static function id()
    {
        $session = session();
        if ($session->has('logged_in')) {
            if ($session->has('userData')) {
                return $session->get('userData')['id'];
            }
            return null;
        }
        return null;
    }

    public static function check()
    {
        $session = session();
        $session->has('logged_in');
    }

    public static function forget()
    {
        $session = session();
        $session->remove('logged_in');
        $session->remove('userData');
    }

    public static function user()
    {
        $session = session();
        if ($session->has('logged_in')) {
            if ($session->has('userData')) {
                return $session->get('userData');
            }
            return null;
        }
        return null;
    }
}
