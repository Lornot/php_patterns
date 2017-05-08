<?php

    require_once 'managers/BloggsCommsManager.php';

    $manager = new BloggsCommsManager();

    print $manager->getHeaderText();
    print $manager->getApptEncoder()->encode();
    print $manager->getFooterText();