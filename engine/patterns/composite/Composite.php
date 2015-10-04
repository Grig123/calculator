<?php

require_once COMPOSITE . '/Operation.php';
require_once COMPOSITE . '/Number.php';

abstract class Component {

    protected $elem;

    public function __construct($elem) {
        $this->elem = $elem;
    }

    public abstract function add(Component $elem);

    public abstract function calculate();
}

?>