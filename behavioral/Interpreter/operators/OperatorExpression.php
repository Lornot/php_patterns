<?php

    require_once 'expressions/Expression.php';

    abstract class OperatorExpression extends Expression
    {
        protected $left_operand;
        protected $right_operand;

        public function __construct(Expression $left_operand, Expression $right_operand)
        {
            $this->left_operand = $left_operand;
            $this->right_operand = $right_operand;
        }

        public function interpret(InterpreterContext $context)
        {
            $this->left_operand->interpret($context);
            $this->right_operand->interpret($context);
            $result_left = $context->lookup($this->left_operand);
            $result_right = $context->lookup($this->right_operand);
            $this->doInterpret($context, $result_left, $result_right);
        }

        protected abstract function doInterpret(InterpreterContext $context, $result_left, $result_right);

    }