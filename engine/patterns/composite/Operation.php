<?php

require_once COMPOSITE . '/Multiplication.php';
require_once COMPOSITE . '/Division.php';
require_once COMPOSITE . '/Addition.php';
require_once COMPOSITE . '/Subtraction.php';

abstract class Operation extends Component {

    protected $children = array();

    public function __construct() {
        
    }

    public function add(Component $component) {
        $this->children[] = $component;
    }

    public function calculate() {
        
    }

}

?>