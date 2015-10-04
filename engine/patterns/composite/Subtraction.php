<?php

class Subtraction extends Operation {
    
    public function calculate() {
        $result = 0;
        foreach (array_reverse($this->children) as $child) {
            $result=$child->calculate()-$result;
        }
        return $result;
    }

}

?>