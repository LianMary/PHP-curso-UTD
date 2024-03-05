<?php

    class LibHtml {

        public static function abrirTag($tag, $atributes){
            $htmlTag =  "<$tag ";
            foreach($atributes as $key=>$value){
                $htmlTag .= "$key='$value' ";
            }
            $htmlTag .= ">";

            echo $htmlTag;

        } 

        public static function fechaTag($tag){
            echo "</$tag>";
        }

        public static function escrever($texto){
            echo $texto;
        }



        public static function criarTabela($array, $atributtes, $links = null){
            self::abrirTag("table",$atributtes);
                $titles = array_keys($array[0]);
                self::abrirTag("thead",$atributtes);
                    self::abrirTag("tr",$atributtes);
                        foreach($titles as $title):
                            self::abrirTag("th",$atributtes);
                                self::escrever($title);
                            self::fechaTag("th");
                        endforeach;
                        
                        if(!is_null($links)){
                            self::abrirTag("th",$atributtes);
                                self::escrever("Ações");
                            self::fechaTag("th");
                        }
                        
                    self::fechaTag("tr");
                self::fechaTag("thead");
                
                self::abrirTag("tbody",$atributtes);
                    foreach($array as $data):
                        self::abrirTag("tr",$atributtes); 
                        foreach($titles as $title):                                               
                            self::abrirTag("td",$atributtes);
                                self::escrever($data[$title]);
                            self::fechaTag("td");                            
                        endforeach;

                        if(!is_null($links)){
                            self::abrirTag("td",$atributtes);
                                foreach($links as $link):                                               
                                    self::escrever($link);
                                endforeach;
                            self::fechaTag("td");                            
                        }

                        self::fechaTag("tr");
                    endforeach;                    
                self::fechaTag("tbody");
            self::fechaTag("table");
        }

    }


?>