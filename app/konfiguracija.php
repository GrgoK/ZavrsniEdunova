<?php

if($_SERVER['SERVER_ADDR']==='178.218.165.37'){
    $url='https://polaznik25.edunova.hr/';
    $dev=true;
    $baza=[
        'server'=>'polaznik25.edunova.hr',
        'baza'=>'KZO',
        'korisnik'=>'leta_korisnik',
        'lozinka'=>'GPVJWr.]Lyw2'
    ];
}else{
    $url='https://polaznik25.edunova.hr/';
    $dev=false;
    $baza=[
        'server'=>'localhost',
        'baza'=>'leta_zavrsnirad',
        'korisnik'=>'leta_korisnik',
        'lozinka'=>'GPVJWr.]Lyw2'
    ];
}

return [
    'dev'=>$dev,
    'url'=>$url,
    'naslovApp'=>'ZavrsniEdunova',
    'baza'=>$baza
];
  