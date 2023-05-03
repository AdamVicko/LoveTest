<?php

//camelCase
declare(strict_types=1);

class Rekurzija
{
    //public function __construct()    

    public function __construct( string $strBrojeva)
    {
        $this->strBrojeva=$strBrojeva; // deklaracija za constructor jedna varijabla

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

        return Rekurzija::__construct($zbroj);
    }

    public function __tostring() //prebacivanje u string da mozemo ispisat ili dalje ucitat kao string
    {
        return "$this->strBrojeva";
    }

    static public function names()
    {
        $imeMomka = '';
        $imeDjevojke = '';
        echo PHP_EOL . PHP_EOL . 'LoveCalculator' . PHP_EOL . 'Use only spaces to seperate midle names' . PHP_EOL;
        while(true)
        {

            $imeMomka = readline('Enter the name of the boy: ');
            
            if ( (preg_match('~[0-9]+~', $imeMomka)) || (str_contains($imeMomka, '_')) 
                    || (str_contains($imeMomka, '-')) ) 
                {
                    continue;
                }else 
                {
                    break;
                }
        }

        while(true)
        {    
            $imeDjevojke = readline('Enter the name of the girl: ');

            if ( (preg_match('~[0-9]+~', $imeDjevojke)) || (str_contains($imeDjevojke, '_')) 
                    || (str_contains($imeDjevojke, '-')) ) 
                {
                    continue;
                }else 
                {
                    break;
                }
        }

        //array $imeMomkaLetter = str_split($imeMomka); //pretori string u array svaki character je novi
        //array $imeDjevojkeLetter = str_split($imeDjevojke); //pretori string u array svaki character je novi
        $obaImenaStr = $imeMomka . $imeDjevojke; //spajam imena
        $obaImenaStr = strtolower($obaImenaStr);
        $obaImenaStr = str_replace([' '],'',$obaImenaStr); // micemo razmake
        //echo $obaImenaStr . PHP_EOL;
        $obaImenaArr = str_split($obaImenaStr); //spojen imena astavljam u array
        $final = [];
        for($i=0 ; $i<(strlen($obaImenaStr)) ; $i++) //slova u brojeve 
        {
            $final[] = substr_count($obaImenaStr,$obaImenaArr[$i]);
        }
         // Vraćanje u string
        $final = implode('',$final);
        return $final;
    }

}