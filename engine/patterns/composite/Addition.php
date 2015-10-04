<?php

class Addition extends Operation {
    
    public function calculate() {
        $result = 0;
        foreach ($this->children as $child) {
            $result+=$child->calculate();
        }
        return $result;
    }

}

?>