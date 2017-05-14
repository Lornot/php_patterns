<?php

    require_once 'ProcessRequest.php';

    class MainProcess extends ProcessRequest
    {
        public function process(RequestHelper $req)
        {
            print __CLASS__.": processing of request <br/>";
        }
    }

   