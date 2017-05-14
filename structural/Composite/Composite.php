<?php

    require 'units/Archer.php';
    require 'units/LaserCannonUnit.php';
    require_once 'composites/Army.php';
    require_once 'composites/CompositeUnit.php';

    

    try {
        $archer = new Archer();
        $laser_archer = new LaserCannonUnit();

        $Army = new Army();
        $Army->addUnit($archer);
        $Army->addUnit($laser_archer);

        $NapoleonArmy = new Army();
        $NapoleonArmy->addUnit(new Archer());
        $NapoleonArmy->addUnit(new Archer());
        $NapoleonArmy->addUnit(new Archer());
        //$archer->addUnit(new Archer());

        $Army->addUnit($NapoleonArmy);

        echo 'Army attack strength: ';
        echo $Army->bombardStrength();
        echo '<br/>';
        echo 'Army defence strength: ';
        echo $Army->defenceStrength();
    } catch (UnitException $e) {

        echo '<h1 style="color:red">'.$e->getMessage().'</h1>';

    }
