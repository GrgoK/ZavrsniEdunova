<?php

if($_SERVER['SERVER_ADDR']==='127.0.0.1'){
    $url='http://ZavrsniEdunova.xyz/';
    $dev=true;
    $baza=[
        'server'=>'localhost',
        'baza'=>'KZO',
        'korisnik'=>'edunova',
        'lozinka'=>'edunova'
    ];

}else{
    $url='https://polaznik42.edunova.hr/';
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
  