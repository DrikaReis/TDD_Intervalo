<?php

namespace Tests;

class Intervalo
{
    public static function intervalo($lista)
    {
      $arrayRetorno = [];
      $arrayTemp = [];
      $temp;
        if(sizeof($lista) > 0){
          sort($lista);
            for ($i=0; $i < sizeof($lista); $i++) {
                if(is_integer ($lista[$i]))
                {
                    if(empty($arrayTemp))
                    {
                      array_push($arrayTemp, $lista[$i]);
                      $temp = $lista[$i];
                    } else {
                        if($lista[$i] - $temp == 1 || $lista[$i] - $temp == 0)
                        {
                            $temp = $lista[$i]; // temp = 12
                            if($i == (sizeof($lista)-1)){
                                array_push($arrayTemp, $temp);
                                array_push($arrayRetorno, $arrayTemp);
                            }
                        } else {
                          if($arrayTemp[0] != $temp){
                            array_push($arrayTemp, $temp);
                          }
                          array_push($arrayRetorno, $arrayTemp);
                          $temp = $lista[$i];
                          $arrayTemp = array();
                          array_push($arrayTemp, $temp);
                        }
                    }
                } else
                {
                    return false;
                }
            }
            return $arrayRetorno;
        } else {
          return false;
        }

    }
}
