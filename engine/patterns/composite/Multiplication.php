<?php

class Multiplication extends Operation {
    
    public function calculate() {
        $result = 1;
        foreach ($this->children as $child) {
            $result*=$child->calculate();
        }
        return $result;
    }

}

?>