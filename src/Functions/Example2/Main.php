<?php

class Main
{
    public function __construct() {
        $order = new Order();

        /**
         * Código que se puede mejorar:
         * La función nowPlusTime() recibe 3 params, pero a primera vista
         * No sabemos que son esos parametros, tenemos que ir a la función para ver que es cada param.
         * Al investigar vemos que la funciones recibe el número de meses, semanas y días,
         * luego los suma a la fecha actual.
         * Al final entendimos que este código es para sumar 4 días a la fecha actual.
         */
        // Before
        $expirationDate = $this->nowPlusTime(0,0,4);
        $order->setExperationDate($expirationDate);

        /**
         * Que hemos mejorado:
         * Hemos reducido el número de params.
         * SRP: Hemos creado funciones que se encargan de hacer una cosa en vez de varias, una para añadir días
         * otra para añadir semanas y otra para añadir meses.
         * Ahora esas funciones tienen un nombre descriptivo que nos ayuda a enteder que hace, sin la necesidad
         * de ir a ver la lógica de la función.
         */
        // After
        $order->setExperationDate($this->nowPlusDays(4));
    }

    private static function nowPlusTime($months, $weeks, $days) {
        $datetime = new DateTime();
        $datetime->modify("+" . $months ." months");
        $datetime->modify("+" . $weeks ." weeks");
        $datetime->modify("+" . $days ." days");
        return $datetime->format('Y-m-d');
    }





    
    private static function nowPlusMonths($months) {
        $datetime = new DateTime();
        $datetime->modify("+" . $months ." months");
        return $datetime->format('Y-m-d');
    }

    private static function nowPlusWeeks($weeks) {
        $datetime = new DateTime();
        $datetime->modify("+" . $weeks ." weeks");
        return $datetime->format('Y-m-d');
    }

    private static function nowPlusDays($days) {
        $datetime = new DateTime();
        $datetime->modify("+" . $days ." days");
        return $datetime->format('Y-m-d');
    }
}






class Order {
    private $expirationDate;

    public function setExperationDate($expirationDate) {
        $this->$expirationDate = $expirationDate;
    }
}
