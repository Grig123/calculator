<?php

class Number extends Component {

    public function add(Component $elem) {
        print ("Cannot add to a expression");
    }

    public function calculate() {
        return $this->elem;
    }

}

?>