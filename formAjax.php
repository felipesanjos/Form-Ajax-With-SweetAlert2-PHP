<?php
//Valida se recebeu um $_POST
if($_POST){
    
    //E-mail é obrigatório nesse exemplo e se estiver preenchido
    if($_POST['email']){
    

        //Retorna sucesso total
        $response = array("success" => true);
        echo json_encode($response);
    }else{
        
        //Se e-mail não estiver preenchido retorna que o sucesso foi falho
        $response = array("success" => false);
        echo json_encode($response);
    }
}