<?php

abstract class AbstractGlobal {

    protected $var;

    protected function __construct() {
        $this->setVar();
        return $this->getParams();
    }

    abstract protected function setVar();

    public function getParams() {
        return $this->var;
    }

    public function getParam($name) {
        return $this->var[$name];
    }

    public function setParam($name, $value = null) {
        $this->var[$name] = $value;
    }

}

?>