<?php

    // Napisati funkciju koja preokrece ceo broj (na primer 2876491204 treba da predje u 4021946782)

    class Task_1 {
        public static function reverse($n) {

            $n = (string)$n;

            if (mb_strlen($n) == 1) {
                return $n;
            }

            $r = "";

            for ($i = mb_strlen($n)-1; $i >= 0; $i--){
                $r .= $n[$i];
            }

            return (int)$r;

        }

        public static function reverseEasy($n) {
            return strrev((string)$n);
        }

        public static function reverseInt(int $n) {

            $reverse = 0;
            settype($temp, 'int');

            while ($n != 0) {
                $temp = $n % 10;
                $reverse = $reverse * 10 + $temp;
                $n = (int)($n / 10);
            }

            return $reverse;

        }
    }