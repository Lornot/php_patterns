<?php

    require_once 'TileDecorator.php';

    class DiamondDecorator extends TileDecorator
    {
        public function getWealthFactor()
        {
            return $this->tile->getWealthFactor() + 2;
        }

    }