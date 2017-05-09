<?php

    require_once 'managers/BloggsCommsManager.php';

    $manager = new BloggsCommsManager();

    print $manager->getHeaderText();
    print $manager->make(BloggsCommsManager::APPOINTMENT)->encode();
    print $manager->make(BloggsCommsManager::CONTACT)->encode();
    print $manager->make(BloggsCommsManager::TODO)->encode();
    print $manager->getFooterText();