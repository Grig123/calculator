<?php

class Dispacher {

    public function __construct() {
        
        /* Define global variable 'params' */
        $_SESSION["params"] = [];
        
        $this->getAction();
    }

    /*
     * Call controller by name from request
     * 
     * @return void
     */

    private function getAction() {
        $action = "Home";
        if (isset($_REQUEST["controller"])) {
            $action = $_REQUEST["controller"];
        }
        $action = ucfirst($action);

        include CONTROLLERS . $action . '.php';
        new $action();
    }

}

?>