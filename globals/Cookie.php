<?php

require_once GLOBALS . 'AbstractGlobal.php';

class Cookie extends AbstractGlobal {

    /**
     * @var an instance of this class
     */
    private static $instance = null;

    /**
     * Returns an singleton instance of this class
     * @return
     */
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Cookie();
        }
        return self::$instance;
    }

    protected function setVar() {
        $this->var = $_COOKIE;
    }

    public function setParam($name, $value = null, $expire = 0, $path = null, $domain = null, $secure = false, $httponly = false) {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }

}

?>