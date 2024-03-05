<?php

    
    function inserir($tabela, $dados = array()){

        # 1º parte da query 
        $query = "INSERT INTO `$tabela` ";

        # 2º Parte da query - campos da tabela
        $campos = implode("`, `", array_keys($dados));
        $query .= "(`$campos`) ";
        
        # 3º Parte da query - valores
        $valores = implode("', '", $dados);
        $query .= "VALUES ('$valores') ";

        //echo $query;

        # Enviando os dados para o banco de dados
        global $conexao;
        $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));

        return $resultado;

    }


    # SELECT { * | camposSelecionados } FROM `tabela` WHERE `campo` = 'valor' ORDER BY ASC  
    function selecionar($tabela, $campos, $filtros , $extra){

        $query = "SELECT ";

        if(is_null($campos)){
            $query .= "* ";
        }else{
            foreach($campos as $campo){
                $query .= "`$campo`, ";
            }

            # Removendo a ultima virgula
            $query = substr($query, 0, -2 );
        }

        $query .= " FROM `$tabela` ";

        if(!is_null($filtros)){
            $query .= " WHERE ";

            foreach($filtros as $campo=>$valor){
                $query .= "`$campo` = '$valor' AND ";
            }

            # Removendo o ultimo "AND"
            $query = substr($query, 0, -4 );
        }

        if(!is_null($extra)){
            $query .= $extra;
        }

        # Enviando os dados para o banco de dados
        global $conexao;
        $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
        
        $data = array();
        while($linha = mysqli_fetch_assoc($resultado)){
            $data[] = $linha; 
        }

        return $data;
    }

