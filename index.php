<?php

//camelCase
declare(strict_types=1);
include_once 'Klasa.php';


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

    $imeMomkaLetter = str_split($imeMomka); //pretori string u array svaki character je novi
    $imeDjevojkeLetter = str_split($imeDjevojke); //pretori string u array svaki character je novi

    $obaImenaStr = $imeMomka . $imeDjevojke; //spajam imena
    $obaImenaStr = strtolower($obaImenaStr);
    $obaImenaStr = str_replace([' ','-','_'],'',$obaImenaStr); // micemo razmake


    //echo $obaImenaStr . PHP_EOL;
    $obaImenaArr = str_split($obaImenaStr); //spojen imena astavljam u array

    $final = [];
    for($i=0 ; $i<(strlen($obaImenaStr)) ; $i++) //slova u brojeve 
    {
        $final[] = substr_count($obaImenaStr,$obaImenaArr[$i]);
    }

    // Vraćanje u string
    $final = implode('',$final);
     //echo $final . PHP_EOL;
    $rekurzija = new Rekurzija($final);
     



    echo PHP_EOL . 'THE CHANCES FOR TRUE LOVE ARE: ' . $rekurzija . '%';
  