<?php

    abstract class CommsManager
    {
        const APPOINTMENT   = 1;
        const TODO          = 2;
        const CONTACT       = 3;

        abstract function getHeaderText();
        abstract function make($flag_int);
        abstract function getFooterText();
        
    }