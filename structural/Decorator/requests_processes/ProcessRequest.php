<?php

    class RequestHelper{};

    abstract class ProcessRequest
    {
        abstract function process( RequestHelper $req);
    }
