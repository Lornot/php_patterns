<?php

    require_once 'ApptEncoder.php';
    
    class MegaApptEncoder extends ApptEncoder
    {
        function encode()
        {
            return 'Data about meeting is encoded in format MegaCal <br/>';
        }
    }