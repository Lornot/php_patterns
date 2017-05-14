<?php

    class LogRequest extends DecorateProcess
    {
        public function process(RequestHelper $req)
        {
            print __CLASS__.": registration of request <br/>";
            $this->process_request->process( $req );
        }
    }