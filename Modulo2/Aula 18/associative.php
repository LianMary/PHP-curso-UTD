<?php

    // $anthony = array("key"=>"value");
    // $anthony["key"] = "value";
    // $anthony = ["key"=>"value"];

    $array["username"] = "Anthony Jefferson";
    $array["email"] = "anthony@email.com";
    $array["document"] = "789.456.123-78";

    $fruits = array(0=>"Banana",1=>"Uva",2=>"Maracujá",200=>3.99,true,3=>"Melão","Morango","Melancia",100=>"Manga",'Murici');

    //print_r$array);
    //echo $anthony['username'];

    foreach($fruits as $key=>$fruit){
        echo $key." -> ".$fruit."<br>";
    }




?>