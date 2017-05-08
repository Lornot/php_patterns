<?php

    require_once 'CommsManager.php';
    require_once 'encoders/BloggsApptEncoder.php';

    class BloggsCommsManager extends CommsManager
    {
        public function getHeaderText()
        {
            return "BloggsCall upper colontitle<br/>";
        }

        public function getApptEncoder()
        {
            return new BloggsApptEncoder();
        }

        public function getFooterText()
        {
            return "BloggsCall lower colontitle<br/>";
        }
    }