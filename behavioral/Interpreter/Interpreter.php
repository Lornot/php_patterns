<?php

    require_once 'InterpreterContext.php';
    require_once 'expressions/LiteralExpression.php';
    require_once 'expressions/VariableExpression.php';
    require_once 'operators/EqualsExpression.php';
    require_once 'operators/BooleanAndExpression.php';
    require_once 'operators/BooleanOrExpression.php';

    $context = new InterpreterContext();
    $literal = new LiteralExpression('four');
    $literal->interpret($context);

    echo $context->lookup($literal)."<br/>";

    $myvar = new VariableExpression('input', 'four');
    $myvar->interpret($context);

    echo $context->lookup($myvar)."<br/>";

    $newvar = new VariableExpression('input');
    $newvar->interpret($context);
    echo $context->lookup($newvar)."<br/>";

    $myvar->setValue('Five');
    $myvar->interpret($context);
    echo $context->lookup($myvar)."<br/>";

    echo $context->lookup($newvar)."<br/>";

    $second_literal = new LiteralExpression('four');
    $second_literal->interpret($context);

    $first_equals_second = new EqualsExpression($literal, $second_literal);
    $first_equals_second->interpret($context);

    $input = new VariableExpression('input');
    $statement = new BooleanOrExpression(
        new EqualsExpression($input, new LiteralExpression('four')),
        new EqualsExpression($input, new LiteralExpression('4'))
    );

    foreach (['four', 4, '4', '52'] as $val) {
        $input->setValue($val);
        echo $val."<br/>";
        $statement->interpret($context);

        if ($context->lookup($statement)) {
            echo "The value corresponds <br/>";
        } else {
            echo "The value does'nt correspond <br/>";
        }
    }
