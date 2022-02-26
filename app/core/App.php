<?php

class App
{
    public static function start()
    {
        $ruta = Request::getRuta();
        
        $djelovi = explode('/', $ruta);

        $klasa='';
        if(!isset($djelovi[1]) || $djelovi[1]===''){
            $klasa='index';
        }else{
            $klasa=ucfirst($djelovi[1]);

        }

        $klasa .= 'Controller';

        $metoda='';
        if(!isset($djelovi[2]) || $djelovi[2]===''){
            $metoda='index';
        } else{
            $metoda=$djelovi[2];
        }

        if(class_exits($klasa) && method_exists($klasa,$metoda)){
            $instanca = new $klasa();
            $instanca->$metoda();
        }else{
            $view = new View();
            $view->render('eror404',[
                'onoceganema' =>$klasa . '->' . $metoda
            ]);
        }

    }


public static function config($kljuc)
{
    $config = include BP_APP . 'konfiguracija.php';
    return $config[$kljuc];
     }

   public static function autoriziran()
 {
    if(isset($_SESSION) && isset($_SESSION['autoriziran'])){
        return true;
    }

    return false;
 }


}

