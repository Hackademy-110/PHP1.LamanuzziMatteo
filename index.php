<?php
// Array casuale per calcoli
$arrStart=[3,5,6,9,1,1,13,8,6,11,21,15,1,1,3,31,13];
//Calcolare media dei numeri pari
$sum=0;
$nrEven=0;
for($i=0;$i<count($arrStart);$i++){
    if($arrStart[$i]%2==0){
        $sum+=$arrStart[$i];
        $nrEven++;
    } else{}
}
echo ($sum/$nrEven);
// utenti di cui stampare il nome e cognome con il genere
$arrPeople=[
    ["nome"=> 'Marco',"cognome"=> 'Rossi', "genere"=>'M'],
    ["nome"=> 'Paola',"cognome"=> 'Verdi', "genere"=>'F'],
    ["nome"=> 'Franco',"cognome"=> 'Pasagarreddu', "genere"=>'S'],
    ["nome"=> 'Matteo',"cognome"=> 'Lamanuzzi', "genere"=>'M'],
    ["nome"=> 'Pina',"cognome"=> 'Fantocci', "genere"=>'F'],
];
foreach($arrPeople as $persona){
    if($persona['genere']=="M"){
        echo("Buongiorno Sig. ". $persona['nome'] . " ". $persona['cognome']. "\n");
    } else if($persona['genere']=="F"){
        echo("Buongiorno Sig.ra ". $persona['nome']." ". $persona['cognome']."\n" );
    } else{
        echo("Ahiò, ". $persona['nome']. " ". $persona['cognome']." c'è.\n");
    }

};
//Stampa da 1 a 100 con PHP sui divisibili di 3 e JAVASCRIPT sui divisibili per 5 con HACKADEMY 110 SE DIVIBILI PER 15
for($i=0;$i<100;$i++){
    if($i%3==0&&$i%5==0){
        echo "HACKADEMY 110!\n";
    } elseif($i%3==0&&$i%5!=0){
        echo"PHP\n";
    }elseif($i%3!=0&&$i%5==0){
        echo "JAVASCRIPT\n";
    }else{
        echo "$i\n";
    }
}
?>