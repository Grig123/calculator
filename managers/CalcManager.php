<?php

require_once MANAGERS . 'AbstractManager.php';
require_once COMPOSITE . 'Composite.php';

class CalcManager extends AbstractManager {

    private $operators = array("*", "/", "+", "-");

    /*
     * Calculate expression with composite patern
     * 
     * @param string $expression math expression
     * @return float calculation result
     */
    public function calculateExpression($expression) {
        if (!is_numeric($expression)) {
            foreach ($this->operators as $operator) {
                if (strpos($expression, $operator)) {
                    $result = $this->getCalculateOperation($operator);
                    $operands = explode($operator, $expression);
                    $this->setOperationOperands($result, $operands);
                    return $result->calculate();
                }
            }
        } else {
            $operand = new Number($expression);
            return $operand;
        }
    }

    /*
     * Get calculate operation by operator
     * 
     * @param string $operator
     * @return object $operation math operation object
     */

    public function getCalculateOperation($operator) {
        switch ($operator) {
            case "*":
                $operation = new Multiplication();
                break;
            case "/":
                $operation = new Division();
                break;
            case "+":
                $operation = new Addition();
                break;
            case "-":
                $operation = new Subtraction();
                break;
        }
        return $operation;
    }

    /*
     * Set operation operands
     * 
     * @param string &$result math operation result
     * @param array $operands math operands
     * @return void
     */

    public function setOperationOperands(&$result, $operands) {
        foreach ($operands as $operand) {
            $operand = $this->calculateExpression($operand);
            if (!$operand instanceof Component) {
                $operand = new Number($operand);
            }
            $result->add($operand);
        }
    }

}

?>