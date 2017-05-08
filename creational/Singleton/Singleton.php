<?php

    /** Singleton */
    class Preferences
    {

        private $props = [];
        private static $instance;

        private function __costruct(){}

        public static function getInstance()
        {
            if (empty(self::$instance))
                self::$instance = new Preferences();
            return self::$instance;
        }

        public function setProperty($key, $val)
        {
           $this->props[$key] = $val;
        }

        public function getProperty($key)
        {
            return $this->props[$key];
        }
    }

    $pref = Preferences::getInstance();
    $pref->setProperty('name', 'Ivan');

    unset($pref);

    $pref2 = Preferences::getInstance();
    echo "<pre>";
    print_r($pref2->getProperty('name'));
    echo "</pre>";