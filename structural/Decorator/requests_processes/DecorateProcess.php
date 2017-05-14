<?php

    require_once 'ProcessRequest.php';
    abstract class DecorateProcess extends ProcessRequest
    {
        protected $process_request;

        public function __construct( ProcessRequest $pr )
        {
            $this->process_request = $pr;
        }
    }