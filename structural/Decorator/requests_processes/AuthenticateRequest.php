<?php

    require_once 'DecorateProcess.php';

    class AuthenticateRequest extends DecorateProcess
    {
        public function process(RequestHelper $req)
        {
            print __CLASS__.": authentification of the request <br/>";
            $this->process_request->process($req);
        }
    }