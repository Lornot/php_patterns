<?php

    class Army
    {
        private $units = [];

        public function addUser(User $user)
        {
            array_push($this->units, $user);
        }

        public function bombardStrength()
        {
            $strength = 0;
            foreach ($this->units as $unit)
                $strength += $unit->bombardStrength();

            return $strength;
        }
    }