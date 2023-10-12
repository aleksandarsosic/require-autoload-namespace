<?php

    // $arr = [1,3,7,2,9,1,1,9,8,2,4,7,7,1,2,9,1,7,9,2]; Pronaci najmanji broj koraka ako svaki broj predstavlja maksimum broja koraka koji mogu biti ucinjeni unapred od tog indeksa.
    // Dakle naci najmanji broj koraka da bi se stiglo do kraja niza pocevsi od indeksa.

    namespace tasks;

    class Task_4 {

        public static function steps($arr)
        {

            $steps = 0;
            $totalSteps = count($arr);

            $step = $arr[0] + 1;

            $i = 0;

            do {

                $tempI = 0;

                for (; $i < $step; $i++) {

                    $tempArr[$i] = $arr[$i];
                    $tempI = $arr[$i] >= $tempArr[$i - 1] ? $i : $tempI;

                }

                $steps++;

                print_r($tempArr);
                print_r("<br>");

                print_r($tempI);
                print_r("<br>");

                $i = $tempI;
                $step = $i + max($tempArr);
                $tempArr = [];

            } while ($totalSteps > $i);

            return $steps;

        }

    }