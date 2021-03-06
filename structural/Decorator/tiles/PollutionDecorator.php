<?php

    require_once 'TileDecorator.php';

    class PollutionDecorator extends TileDecorator
    {
        public function getWealthFactor()
        {
            return $this->tile->getWealthFactor() - 4;
        }
    }