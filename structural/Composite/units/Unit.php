<?php

    abstract class Unit
    {
        abstract function bombardStrength();
        abstract function defenceStrength();

        public function getComposite()
        {
            return null;
        }
    }