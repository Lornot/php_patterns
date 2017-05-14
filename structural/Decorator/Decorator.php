<?php

    require_once 'tiles/PollutionDecorator.php';
    require_once 'tiles/DiamondDecorator.php';
    require_once 'tiles/Plains.php';

    $tile = new Plains();
    //print $tile->getWealthFactor();

    $tile = new DiamondDecorator(new Plains());
    //print $tile->getWealthFactor();

    $tile = new PollutionDecorator(new DiamondDecorator(new Plains()));
    print $tile->getWealthFactor();

    echo '<hr/>';

    require_once 'requests_processes/AuthenticateRequest.php';
    require_once 'requests_processes/StructureRequest.php';
    require_once 'requests_processes/LogRequest.php';
    require_once 'requests_processes/MainProcess.php';

    $process = new AuthenticateRequest(
        new StructureRequest(
            new LogRequest(
                new MainProcess()
            )
        )
    );
    $process->process(new RequestHelper());
