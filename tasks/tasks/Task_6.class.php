<?php

    // Spojiti dva nesortirana niza u jedan sortirani niz ([5,9,1,7],[2,2,0,4] u [0,1,2,2,4,5,7,9])
    // odraditi sort manuelno

    namespace tasks;

    class Task_6 {

        public $arr1 = [5, 9, 1, 7];
        public $arr2 = [2, 2, 0, 4];

        private function doMerge($arr1, $arr2)
        {
            return array_merge($this->arr1, $this->arr2);
        }

        public function getArrMerge()
        {

            return $this->doMerge($this->arr1, $this->arr2);

        }

        public static function sortArr($arr)
        {

            sort($arr);

            foreach ($arr as $key => $value) {
                echo $key . ". " . $value . "<br>";
            }
        }

        public static function sortManual($arrManual)
        {

            for ($i = 0; $i < count($arrManual); $i++) {
                for ($j = 0; $j < count($arrManual); $j++) {
                    if ($arrManual[$i] < $arrManual[$j]) {
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

    }