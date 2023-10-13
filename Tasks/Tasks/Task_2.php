<?php

    // Napisati funkciju za utvrdjivanje da li je dati ceo broj palindrom (npr. 1221 je palindrom dok 1231 nije)


    namespace Tasks;

    class Task_2 {
        public static function palindrome($n)
        {

            $n = (string)$n;

            $p = "";

            for ($i = mb_strlen($n); $i >= 0; $i--) {
                $p .= $n[$i];
            }

            if ($n == $p) {
                return "palindrome - YES";
            } else {
                return "palindrome - NO";
            }

        }
    }