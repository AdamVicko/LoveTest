<?php

//camelCase
declare(strict_types=1);

class Rekurzija
{

    public function __construct(string $strBrojeva)
    {
        if(strlen($strBrojeva) < 3) // ako je dulkjina stringa manja od 100 vrati ga KRAJ
        {
            return $strBrojeva;
        }

        if(strlen($strBrojeva) % 2 == 0)
        {
            for($j=0 , $c=strlen($strBrojeva)-1 ; $j < (strlen($strBrojeva) / 2)-1 , $c >= (strlen($strBrojeva) / 2) ; $c-- , $j++)
            {
                
                $zbroj[] = $strBrojeva[$j] + $strBrojeva[$c];
            }
        }else
        {
            $m = (int)((strlen($strBrojeva))/2);
            for($j=0 , $c=strlen($strBrojeva)-1 ; $j < (strlen($strBrojeva) / 2)-1 , $c >= (strlen($strBrojeva) / 2) ; $c-- , $j++)
            {
                
                $zbroj[] = $strBrojeva[$j] + $strBrojeva[$c];
            }
            $zbroj[] = $strBrojeva[$m];
        }
        $zbroj = implode('',$zbroj);

        return __construct($zbroj);
    }

}