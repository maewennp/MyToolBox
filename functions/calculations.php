<?php

    function getPercent($percent = null, $of = null , $result =null){

        if($result === null){
            $result = $percent * $of / 100;

            return [
                'result' => $result,
            ];
        }
        if($percent === null){
            $percent = $of / $result * 100;

            return [
                'percent' => $percent,
            ];
        }
        if($of === null){
            $of = $result * 100 / $percent;

            return [
                'of' => $of,
            ];
        }
    }

    function ruleOfThird($a = 1, $b = 1, $c = 1): array
    {
        return [
            'd' => ($b * $c)  / $a,
        ];
    }

    function cesar($clear, $key, $reverse = false){
        $lowercaseAlphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uppercaseAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercaseAlphabet = str_split($lowercaseAlphabet);
        $uppercaseAlphabet = str_split($uppercaseAlphabet);
        $clear = str_split($clear);
        $result = '';
        if($key >=1 || $key <= -1){
            foreach ($clear as $letter){
                if ($letter === ' ') {      // Si le caractère est un espace
                    $result .= ' ';         // alors le résultat sera un espace
                } elseif (in_array($letter, $lowercaseAlphabet)){  // si le caractère est une lettre en minuscule
                    $alphabet = $lowercaseAlphabet;
                    $index = array_search($letter, $alphabet);
                    $index = $reverse ? $index - $key : $index + $key;
                    while($index > 25){
                        $index = $index - 26;
                    }
                    while($index < 0){
                        $index = $index + 26;
                    }
                    $result .= $alphabet[$index];
                } elseif (in_array($letter, $uppercaseAlphabet)){  // si le caractère est une lettre en majuscule
                    $alphabet = $uppercaseAlphabet;
                    $index = array_search($letter, $alphabet);
                    $index = $reverse ? $index - $key : $index + $key;
                    while($index > 25){
                        $index = $index - 26;
                    }
                    while($index < 0){
                        $index = $index + 26;
                    }
                    $result .= $alphabet[$index];
                
                } else {  //si c'est un caractère spécial qui ne fait pas parti de l'alphabet majuscule ou minuscule
                    $result .= $letter;
                }
            }
        }

        if($reverse){
            return [
                'clear' => $result,
            ];
        } else {
            return [
                'result' => $result,
            ];
        }
    }


    function convertCurrency($amount = null, $from, $to){ 
        
        $url = 'https://open.er-api.com/v6/latest/' . $from;
        
        $data = file_get_contents($url);
        $data = json_decode($data, true);
        $rate = $data['rates'][$to];
        
        $convertedAmount = $amount * $rate;
        return [
            'result' => $convertedAmount,
        ];
    }

    function convertVolume($volume, $from, $to){
        return [
            'result' => $volume * $from / $to
        ];
    }

