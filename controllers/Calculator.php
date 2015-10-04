<?php

require_once CONTROLLERS . 'AbstractController.php';
require_once MANAGERS . 'CalcManager.php';

class Calculator extends AbstractController {

    public function load() {
        $this->calculate();
    }

    /*
     * Calculate expression from request and assign the result
     * 
     * @return void
     */

    private function calculate() {
        $expression = $_REQUEST["expression"];

        $calcManager = new CalcManager();
        $result = $calcManager->calculateExpression($expression);

        $this->assign("result", $result);
    }

}

?>