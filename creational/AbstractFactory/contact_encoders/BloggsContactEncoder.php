<?php

    require_once 'ContactEncoder.php';

    class BloggsContactEncoder extends ContactEncoder
    {
        public function encode()
        {
            print 'The data about contacts is encoded in BloggsCal format<br/>';
        }
    }