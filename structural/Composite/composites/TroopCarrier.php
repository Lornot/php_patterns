<?php

    require_once 'CompositeUnit.php';

    class TroopCarrier extends CompositeUnit
    {

        function addUnit(Unit $unit)
        {
            if ($unit instanceof Cavalry) {
                throw new UnitException('You can\'t move the horse to the BMP');
            }

            super::addUnit($unit);
        }

        public function bombardStrength()
        {
            return 0;
        }

        public function defenceStrength()
        {
            return 0;
        }

    }
