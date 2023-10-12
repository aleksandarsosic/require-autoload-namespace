<?php

    // Napisati funkciju koja ce za uneti string sa zagradama vratiti string koji je najduzi validan substring (npr. ((() treba da vrati (), ili ())() treba da vrati ()())

    namespace tasks;

    class Task_7 {

        public static function brackets($s)
        {

            $arr = [];

            while (mb_strlen($s) > 1) {

                for ($i = 0; $i < mb_strlen($s); $i++) {

                    if ($s[$i] == '(') {

                        for ($j = $i + 1; $j < mb_strlen($s); $j++) {

                            $temp[] = $s[$j - 1];

                            if ($s[$j] == ")") {

                                $temp[] = $s[$j];

                                foreach ($temp as $key => $value) {
                                    $string .= $temp[$key];
                                }

                                $arr[] = $string;

                                $s = str_replace($string, "", $s);
                                $string = "";
                                $temp = [];
                                break;
                            }

                            if ($s[$j] == '(') {

                                $temp[] = $s[$j - 1];

                                foreach ($temp as $key => $value) {
                                    $string .= $temp[$key];
                                }

                                $s = str_replace($string, "", $s);
                                $string = "";
                                $temp = [];
                                break;

                            }

                        }

                    }

                }

                $max = 0;
                $longest = "";

                foreach ($arr as $value) {
                    $stringLength = mb_strlen($value);
                    if ($stringLength > $max) {
                        $max = $stringLength;
                        $longest = $value;
                    }
                }

                return var_dump($longest);

            }

        }

    }