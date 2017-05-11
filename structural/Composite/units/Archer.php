<?php

    require_once 'Unit.php';
    require_once __DIR__.'/../exceptions/UnitException.php';
    

    class Archer extends Unit
    {
        public function bombardStrength()
        {
            return 4;
        }

        public function defenceStrength()
        {
            return 1;
        }
    }

    