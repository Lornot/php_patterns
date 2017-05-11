<?php

    require_once __DIR__.'/../units/Unit.php';

    abstract class CompositeUnit extends Unit
    {
        protected $units = [];

        public function getComposite()
        {
            return $this;
        }

        public function units()
        {
            return $this->units;
        }

        public function addUnit(Unit $unit)
        {
            if (in_array($unit, $this->units, true))
                return;

            $this->units[] = $unit; 
        }

        public function removeUnit(Unit $unit)
        {
            $this->units = array_udiff($this->units, [$unit], function($a, $b){ return ($a === $b) ? 0 : 1;});
        }
        
    }