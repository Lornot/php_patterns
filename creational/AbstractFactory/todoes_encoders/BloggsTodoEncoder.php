<?php

    require_once 'TodoEncoder.php';

    class BloggsTodoEncoder extends TodoEncoder
    {
        public function encode()
        {
            print 'The data about todo list is encoded in BloggsCal format<br/>';
        }
        
    }