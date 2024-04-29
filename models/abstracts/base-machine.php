<?php

    abstract class BaseMachine implements Drive
    {

        function Special()
        {
            echo("BaseMachine use Special!!!<br />");
        }

        public function MoveForward() 
        {
            echo("BaseMachine move forward<br />");
        }

        public function MoveBack() 
        {
            echo("BaseMachine move back<br />");
        }

    }