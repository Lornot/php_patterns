<?php

    require_once 'ApptEncoder.php';

    class BloggsApptEncoder extends ApptEncoder
    {
        function encode()
        {
            return 'The data about meeting is encoded in BloggsCal format<br/>';
        }
    }