<?php

    require_once 'Tile.php';

    class Plains extends Tile
    {
        private $wealthfactor = 2;

        public function getWealthFactor()
        {
            return $this->wealthfactor;
        }
    }