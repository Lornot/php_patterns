<?php

    class InterpreterContext
    {
        private $expression_store = [];

        public function replace(Expression $expression, $value)
        {
            $this->expression_store[$expression->getKey()] = $value;
        }

        public function lookup(Expression $expression)
        {
            return $this->expression_store[$expression->getKey()];
        }
    }