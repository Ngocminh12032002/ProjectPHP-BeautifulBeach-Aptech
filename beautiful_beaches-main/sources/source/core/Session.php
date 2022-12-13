<?php

/**
 * data(key, value) => set session
 * data(key) => get session
 */
class Session
{
    static public function data($key = '', $value = '')
    {
        $sessionKey = self::isInvalid();
        if (!empty($value)) {
            if (!empty($key)) {
                $_SESSION[$sessionKey][$key] = $value; //set session
                return true;
            }
            return false;
        } else {
            if (empty($key)) {
                if (isset($_SESSION[$sessionKey])) {
                    return $_SESSION[$sessionKey];
                }
            } else {
                if (isset($_SESSION[$sessionKey][$key])) {
                    return $_SESSION[$sessionKey][$key]; //get session

                }
            }
        }
    }
    /**
     * delete(key) => xoa session vowi key
     * delete() => xoa het session
     */
    static public function delete($key = '')
    {
        $sessionKey = self::isInvalid();
        if (!empty($key)) {
            if (isset($_SESSION[$sessionKey][$key])) {
                unset($_SESSION[$sessionKey][$key]);
                return true;
            }
            return false;
        } else {
            unset($_SESSION[$sessionKey]);
            return true;
        }
        return false;
    }

    static public function showErrors($message)
    {
        $data = ['message' => $message];
        App::$app->loadError('exception', $data);
        die();
    }


    /**
     * Flash data
     * set flash data => giong nhu set data
     * get flash data => giong nhu get data + xoa luon sau khi get xong
     */
    static public function flash($key = '', $value = '')
    {
        $dataFlash = self::data($key, $value);
        if (empty($value)) {
            self::delete($key);
        }
        return $dataFlash;
    }

    static function isInvalid()
    {
        global $config;
        if (!empty($config['session'])) {
            $sessionConfig = $config['session'];
            if (!empty($sessionConfig['session_key'])) {
                $sessionKey = $sessionConfig['session_key'];
                return $sessionKey;
            } else {
                self::showErrors('Thiếu cấu hình session_key. Vui lòng kiểm tra file: config/session.php ');
            }
        } else {
            self::showErrors('Thiếu cấu hình session. Vui lòng kiểm tra file: config/session.php ');
        }
    }
}