<?php

    require_once 'TerrainFactory.php';
    require_once 'Sea/EarthSea.php';
    require_once 'Plains/EarthPlains.php';
    require_once 'Plains/MarsPlains.php';
    require_once 'Forest/EarthForest.php';

    $factory = new TerrainFactory(
                    new EarthSea(-2),
                    new EarthPlains(),
                    new EarthForest()
              );

    print_r($factory->getSea());
    print_r($factory->getPlains());
    print_r($factory->getForest());

    echo '<br/>';

    print_r($factory->getSea());
    print_r($factory->getPlains());
    print_r($factory->getForest());