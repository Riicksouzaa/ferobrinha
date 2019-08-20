<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 19/08/2019
 * Time: 21:22
 */


/**
 * Function $insere_afiliado
 *
 * @param $id_nivel_afiliado int
 * @param $nome_afiliado String
 * @param $hash_afiliado String
 * @param $id_afiliado_pai int
 */
$insere_afiliado = function ($id_nivel_afiliado, $nome_afiliado, $hash_afiliado, $id_afiliado_pai) use ($SQL, $account_logged) {
    $afiliado = $SQL->prepare("
    INSERT INTO cn_afiliados (id_afiliado_nivel,id_account, nome_afiliado, hash_afiliado)
    VALUES (:id_afiliado_nivel,:id_account,:nome_afiliado,:hash_afiliado)");

    $afiliado->execute([
        'id_afiliado_nivel' => $id_nivel_afiliado,
        'id_account' => 1,
        'nome_afiliado' => $nome_afiliado,
        'hash_afiliado' => $hash_afiliado
    ]);

    $afiliado_filho_id = $SQL->lastInsertId();

    $vinculo_afiliado = $SQL->prepare("
        INSERT INTO cn_afiliados_vinculados (id_afiliado_pai,id_afiliado_filho)
        values (:id_afiliado_pai,:id_afiliado_filho)");

    $vinculo_afiliado->execute([
        'id_afiliado_pai' => $id_afiliado_pai,
        'id_afiliado_filho' => $afiliado_filho_id
    ]);

//    var_dump($vinculo_afiliado->errorInfo());
};


$create_hash = function ($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
};


$insere_afiliado(1, 'Ricardo Souza', $create_hash(20), 15);

$get_all_afiliados = function () use ($SQL) {

    $player = $SQL->prepare("SELECT * FROM cn_afiliados");
    $player->setFetchMode(PDO::FETCH_ASSOC);
    $player->execute([]);
    $dados = $player->fetchAll();
    return $dados;
};

echo json_encode($get_all_afiliados(), true);
die();