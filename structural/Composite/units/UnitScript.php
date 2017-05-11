<?php

    class UnitScript
    {
        static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
        {
            if (!is_null($composite = $occupyingUnit->getComposite())) {
                $composite->addUnit($newUnit);
            } else {
                $composite = new Army();
                $composite->addUnit($occupyingUnit);
                $composite->addUnit($newUnit);
            }
            return $composite;
        }
    }