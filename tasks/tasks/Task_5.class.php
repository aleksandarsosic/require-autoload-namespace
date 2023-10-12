<?php

    // Napisati funkciju za utvrdjivanje da li je string koji sadrzi samo zagrade vazeci (npr. ()[]{} je vazeci, ali ([)] nije)

    namespace tasks;

    class Task_5 {

        public static function validBrackets($s)
        {

            $s = (string)$s;

            $arr = [];

            for ($i = 0; $i < mb_strlen($s); $i++) {
                if ($s[$i] == "(" || $s[$i] == ")" || $s[$i] == "{" || $s[$i] == "}" || $s[$i] == "[" || $s[$i] == "]") {
                    $arr[] = $s[$i];
                }
            }

            $countArr = count($arr);

            if ($countArr % 2 != 0) {
                return "Not valid!";
            }

            $count = 0;

            while ($countArr > 0) {

                $s1 = $arr[0];
                $s2 = $arr[1];
                $brackets = $s1 . $s2;

                if ($brackets == "()" || $brackets == "[]" || $brackets == "{}") {
                    array_shift($arr);
                    array_shift($arr);
                } else {
                    $count++;
                    break;
                }

                $countArr = count($arr);

            }

            if ($count > 0) {
                return "Not Valid!";
            } else {
                return "Valid!";
            }

        }

    }