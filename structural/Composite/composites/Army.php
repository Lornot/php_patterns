<?php

    require_once __DIR__ . '/../units/Unit.php';
    require_once 'CompositeUnit.php';

    class Army extends CompositeUnit
    {
        public function bombardStrength()
        {
            $strength = 0;
            foreach ($this->units as $unit)
                $strength += $unit->bombardStrength();

            return $strength;
        }

        public function defenceStrength()
        {
            $strength = 0;
            foreach ($this->units as $unit)
                $strength += $unit->defenceStrength();

            return $strength;
        }
    }