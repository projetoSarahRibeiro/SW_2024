<?php

    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    $data = require_once __DIR__ . '../../../api/data.php';

    //verifca se um url veio alguma identificação do cliente
    if(isset($_GET['id'])){
        $id = $GET['id'];
    }else{
        echo response::resposta(400,'error','Necessário infoprmar o id');
        exit;
    }
    if($id < 0 || $id > count($data) - 1){
        echo responde::resposta(400,'error','Cliente não encontrado');
        exit;

    }


    echo Response::resposta(200, 'success', $data[$id]);

?>