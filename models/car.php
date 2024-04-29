<?php

    class Car extends MotorVehicle 
    {
        function Special()
        {
            echo("Car use Special!!!<br />");
        }

        public function MoveForward() 
        {
            echo("Car move forward<br />");
        }

        public function MoveBack() 
        {
            echo("Car move back<br />");
        }
    }