<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        //Парсим xml источник
        $xml = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp');

        if (is_object($xml)) {
 
            foreach($xml->Valute as $a)
            {
                $arr=$a->attributes();
                if((string)$arr["ID"]==="R01235"){
                    $val=(string)$a->Value;
                    echo json_encode($val);
                    exit();
                }
            }
        }
        
        // Парсим json источник
        $f="https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+%22USDRUB,EURRUB%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
        $decode = file_get_contents($f);
    
        $arr = json_decode($decode,true);
    
        if (is_array($arr)){
            echo $arr["query"]["results"]["rate"]["0"]["Rate"];
            exit();
        }    





    }
}
