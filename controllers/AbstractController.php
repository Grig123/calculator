<?php

abstract class AbstractController {

    public function __construct() {
        $this->load();
        $this->getTemplate();
    }

    /*
     * Called after creating controller
     * 
     * @return void
     */

    protected abstract function load();


    /*
     * Set variable to global "params"
     * 
     * @param string $name variable name
     * @param string $value variable value
     * @return void
     */

    protected function assign($name, $value) {
        $_SESSION["params"][$name] = $value;
    }

    /*
     * Load controller template
     * 
     * @return void
     */

    protected function getTemplate() {
        $class = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', get_class($this)));
        $template = TEMPLATES . $class . ".php";
        $params = $_SESSION["params"];
        $this->loadTemplate($template, $params);
    }

    /*
     * Include template by path and assign variables
     * 
     * @param string $path template path
     * @param array $params global variables
     * @return void
     */

    protected function loadTemplate($path, $params) {
        include $path;
    }

}

?>