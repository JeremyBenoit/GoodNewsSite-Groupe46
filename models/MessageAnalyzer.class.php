<?php

class MessageAnalyzer
{
    private static $positivityWordTable = ["bon","super","cool","génial","bonheur","plaisir","sympa","beau","positif","agréable"];

    public function getMessagePositivity($string){
        $count = 0;

        foreach (self::$positivityWordTable as $word){
            if(strpos($string,$word)) $count++;
        }
        if($count == 0){
            return "neutre";
        } elseif($count<=2){
            return "correct";
        } elseif ($count<=4){
            return "bon";
        }elseif ($count==5){
            return "très bon";
        }elseif ($count<=8){
            return "franchement positif";
        }elseif ($count==9){
            return "excellent";
        }else{
            return "parfait";
        }
    }
}