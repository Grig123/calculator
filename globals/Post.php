<?php

require_once GLOBALS . 'AbstractGlobal.php';

class Post extends AbstractGlobal {

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
            self::$instance = new Post();
        }
        return self::$instance;
    }

    protected function setVar() {
        $this->var = $_POST;
    }

}

?>