<?php

    require_once 'CommsManager.php';
    require_once 'appointments_encoders/BloggsApptEncoder.php';
    require_once 'todoes_encoders/BloggsTodoEncoder.php';
    require_once 'contact_encoders/BloggsContactEncoder.php';

    class BloggsCommsManager extends CommsManager
    {
        public function getHeaderText()
        {
            return "BloggsCall upper colontitle<br/>";
        }

        function make($flag_int)
        {
            switch ($flag_int) {
                case self::APPOINTMENT:
                    return new BloggsApptEncoder();
                case self::TODO:
                    return new BloggsTodoEncoder();
                case self::CONTACT:
                    return new BloggsContactEncoder();
            }
        }

        public function getFooterText()
        {
            return "BloggsCall lower colontitle<br/>";
        }
    }