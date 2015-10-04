<?php

require_once GLOBALS . 'AbstractGlobal.php';

class Session extends AbstractGlobal {

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
            self::$instance = new Session();
        }
        return self::$instance;
    }

    protected function setVar() {
        if (!isset($_SESSION)) {
            $_SESSION = [];
        }
        $this->var = $_SESSION;
    }

}

?>