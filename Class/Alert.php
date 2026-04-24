<?php

namespace App;

class Alert{
    public static function printmessage($text, $type){
                echo "<div style='text-align:center;margin-bottom:0;' class = 'alert alert-" . $type . "' role = 'alert' >" . $text . "</div>";

    }
    
    Public function showsignupdoneAlert(){

        if(isset($_GET['signupdone'])){

        Alert::printmessage("Your account has been created , Please login to start your shopping ","success");

        }
    } 

}

?>