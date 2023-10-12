<?php

    // Spojiti dva nesortirana niza u jedan sortirani niz ([5,9,1,7],[2,2,0,4] u [0,1,2,2,4,5,7,9])

    $arr1 = [5,9,1,7];
    $arr2 = [2,2,0,4];

    $arrFast = [];
    $arrFast = array_merge($arr1, $arr2);
    function sortArr($arr){

        sort($arr);

        foreach ($arr as $key => $value) {
            echo $key . ". " . $value . "<br>";
        }
    }

    // odraditi sort manuelno
    $arrManual = [];
    $arrManual = array_merge($arr1, $arr2);

    function sortManual($arrManual){

        for ($i = 0; $i < count($arrManual); $i++) {
            for ($j = 0; $j < count($arrManual); $j++) {
                if ($arrManual[$i] < $arrManual[$j]){
                    $temp = $arrManual[$i];
                    $arrManual[$i] = $arrManual[$j];
                    $arrManual[$j] = $temp;
                }
            }
        }

        foreach ($arrManual as $key => $value) {
            echo $key . ". " . $value . "<br>";
        }
    }
