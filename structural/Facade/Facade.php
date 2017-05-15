<?php

    function getProductFileLines($file)
    {
        return file($file);
    }

    function getProductObjectFromId($id, $product_name)
    {
        // Database connection

        return new Product($id, $product_name);
    }

    function getNameFromLine($line)
    {
        if (preg_match("/.*-(.*)\s\d+/", $line, $array))
            return str_replace('_', ' ', $array[1]);

        return '';
    }

    function getIDFromLine($line)
    {
        if (preg_match("/^(\d{1,3})-/", $line, $array))
            return $array[1];

        return -1;
    }

    class Product
    {
        public $id;
        public $name;

        public function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
    }

    /** Bad practise */
    $lines = getProductFileLines('products.text');
    $objects = [];
    foreach ($lines as $line) {
        $id = getIDFromLine($line);
        $name = getNameFromLine($line);
        $objects[$id] = getProductObjectFromId($id, $name);
    }

    echo "<pre>";
    print_r($objects);
    echo "</pre>";
    /** End of bad practise */

    /** Cool practise */
    require_once 'ProductFacade.php';
    $facade = new ProductFacade('products.text');
    $product = $facade->getProduct(234);

    echo "<pre>";
    print_r($product);
    echo "</pre>";

    /** End of cool practise */