<?php
// 2. Sukurkite asociatyvųjį masyvą, kuris reprezentuotų žmogų ir jo svorį ( “vardas1” => “svoris1”, “vardas2” => “svoris2” … ) ir:
// 2.1. Raskite lengviausią žmogų (minimumas);
// 2.2. Sunkiausią (maximumas);
// 2.3. Susumuokite visų žmonių svorį ir nustatykite ar jie gali kilti liftu (500kg ar kita riba);
// 2.4. * Atspausdinkite surikiuotus žmones (pagal svorį);

print('ASOCIATYVUS MASYVAS<br>');
// 2. Asociatyvus masyvas
$arr_Weights = array(
    "Jonas" => 100,
    "Antanas" => 105,
    "Petras" => 80,
    "Ona" => 60
    );

print_r($arr_Weights);print('<br>');
print_r($arr_Weights["Jonas"]); print('<br>');
print_r(array_keys($arr_Weights));print('Masyvo key <br>');

print('<br>');
// 2.1. min
$minweight = min($arr_Weights);
$key_min = array_search($minweight, $arr_Weights);
print($key_min . ' sveria ' . $minweight . ' ir yra lengviausias.<br>');

// 2.2. max
$maxweight = max($arr_Weights);
$key_max = array_search($maxweight, $arr_Weights);
print($key_max . ' sveria ' . $maxweight . ' ir yra sunkiausias.<br>');

// 2.3. suma
print(array_sum($arr_Weights));print(' -- suma visų ' . '<br>');

// 2.4. pagal svorį
asort($arr_Weights);
print_r($arr_Weights);print(' -- sort pagal svorį<br>');


print('<br>');


print('VIENMATIS MASYVAS<br>');
$my_array1 = ["A", "B", 2, 3, 4];           //Sukūrimas (inicializacija) 
echo ($my_array1[0]); print('<br>');        //Reikšmės nuskaitymas / pasiekimas 
$my_array1[0] = 55;                         //Reikšmės pakeitimas 
print_r($my_array1);print('<br>');
array_push($my_array1, 'a', 'b');           //Naujos reikšmės įdėjimas (į galą)
print_r($my_array1);print('<br>');          //Visų reikšmių išvardinimas
for($i=0; $i < count($my_array1); $i++) {   //Narių kiekis masyve (jo ilgis)→ count($my_array)
    print($my_array1[$i]);print('<br>');
 } 
array_splice($my_array1, 2, 2,);            //Reikšmės ištrynimas
print_r($my_array1);print('nuo 2-o elemento pradedant istryniau 2 elementus<br>');
array_splice($my_array1, 2, 2, "AAA");      //Reikšmės įdėjimas į vidurį ar pradžią 
array_splice($my_array1, 2, 0, "AAA");
print_r($my_array1);print('nuo 2-o elemento pradedant istryniau 2 elementus ir iterpiau 1<br>');
echo(array_search("AAA", $my_array1, true));//ismeta paieskomojo indeksa (pirmo rasto)
print('<br>');
sort($my_array1);                           //ascending order sort
print_r($my_array1);print('sort<br>');
rsort($my_array1);                           //reverse sort
print_r($my_array1);print('rsort<br>');
asort($my_array1);                          //sort associative arrays in ascending order, according to the value
print_r($my_array1);print('asort<br>');
ksort($my_array1);                          //sort associative arrays in ascending order, according to the key
print_r($my_array1);print('ksort<br>');
echo(array_sum($my_array1));;print(' suma<br>');//Reikšmių suma
echo(min($my_array1)); print(' min <br>');               //Min max
echo(max($my_array1));print(' max <br>');

// array_filter($my_array1, $callback_function, $flag); //Filtravimas 
function test_odd($var)
  {
  return($var & 1);
  }
  $my_array2=array(1,3,2,3,4);
print_r(array_filter($my_array2,"test_odd"));
print('<br>');

echo(array_sum($my_array2));                           //Reikšmių suma
print(' suma<br>');

print_r($my_array2);print('<br>');
echo(min($my_array2));print(' min <br>');
echo(max($my_array2));print(' max <br>');


// dvimatis masyvas
print('2D MASYVAS<br>');
$my_array3 = array(                                  //Sukūrimas (inicializacija) 
    array(6,5,5,3,4),
    array("d","e","f")
);
print_r($my_array3);

echo ($my_array3[0][3]); print('<br>');             //Reikšmės nuskaitymas / pasiekimas 
$my_array3[0][3] = 55;                              //Reikšmės pakeitimas 
print_r($my_array3);print('<br>');

array_push($my_array3[1], 'a', 'b','o');            //Naujos reikšmės įdėjimas (į galą)
print_r($my_array3);print('<br>');                  //Visų reikšmių išvardinimas
for($i=0; $i < count($my_array3); $i++) {           //Narių kiekis masyve (jo ilgis)→ count($my_array)
    for($j=0; $j < count($my_array3[$i]); $j++) {
        print($my_array3[$i][$j]);print('<br>');
    }
} 


?>