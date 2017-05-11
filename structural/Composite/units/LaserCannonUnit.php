<?php

    require_once 'Unit.php';
    require_once __DIR__.'/../exceptions/UnitException.php';

    class LaserCannonUnit extends Unit
    {
        public function bombardStrength()
        {
            return 44;
        }

        public function defenceStrength()
        {
            return 1;
        }
        
    }