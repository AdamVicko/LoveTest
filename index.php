<?php


declare(strict_types=1);

$imeMomka = '';
$imeDjevojke = '';

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
    $obaImenaStr = str_replace(' ','',$obaImenaStr); // micemo razmake


    echo $obaImenaStr . PHP_EOL;
    $obaImenaArr = str_split($obaImenaStr); //spojen imena astavljam u array
    //echo count($obaImenaArr);

    foreach (count_chars($obaImenaStr, 1) as $charinarr => $val) { 
        /* Mode mi je 1 ispisi samo one koji se pojavlju vise od 0 puta
            $i mi je counter po stringu odnosno krece se od prvog do zadnjeg bita u stringu
            $val broj kolko se puta ponavljaju characteri */

            settype($charinarr,"string");
            settype($val,"string");
            str_replace($val,$charinarr,$obaImenaStr);
        //echo "There were $val instance(s) of \"" , chr($charinarr) , "\" in the string.\n";
     }

     echo $obaImenaStr;


/*

    for(int $j = 0; $charinarr == $obaImenaArr[$j])
    if(strlen($obaImenaStr) % 2 == 0)
    {
        for(int $j=0; $j < (strlen($obaImenaStr) / 2) ; $j++)
        {
            if($charinarr == )
            $obaImenaStr = str_replace($obaImenaArr[$j],)
        }
    }
    
   
*/

 /*
    for(int $i=0, int $j=0 ; $i < strlen($imeMomka), $j < strlen($imeDjevojke) ; $i++, $j++)
    {
        if($imeMomkaLetter[$i] == $imeDjevojkeLetter[$j])
        {

        }
    }
    Adam Ana
*/




//$imeDjevojke = readline('Enter the name of the girl: ');


