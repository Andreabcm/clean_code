<?php

class Main {
    // Boolean checks
    public function checkSomthing() {
        // Mal
        $doorClosed = false;
        // Bien
        $isDoorClosed = false;

        // Mal
        if($doorClosed == false) {

        }

        // Mejot
        if(!$doorClosed) {

        }

        // Mucho mejor
        if(!$isDoorClosed) {

        }
    }

    // Cómo simplicar condicionales
    public function doSomthing() {
        $hour = 12;
        // Before
        if($hour > 6 && $hour < 22) {
            // Que hacer de día
        } else {
            // Que hacer de noche
        }

        // After
        if($this->isDay($hour)) {
            // Que hacer de día
        } else {
            // Que hacer de noche
        }
    }

    private function isDay($hour) {
        return $hour > 6 && $hour < 22;
    }
}