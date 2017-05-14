<?php

    class StructureRequest extends DecorateProcess
    {
        public function process(RequestHelper $req)
        {
            print __CLASS__.": sructured the data of request <br/>";
            $this->process_request->process($req);
        }
    }