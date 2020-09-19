<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 24/08/2019
 * Time: 11:55
 */

class Affiliates extends Website
{

    private $db;
    private $messages = [];

    public function __construct()
    {
        $this->db = Website::getDBHandle();
        $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE, $this->db::FETCH_ASSOC);
    }

    /**
     * @param $status
     * @param $msg
     */
    private function feedbackMessage($status, $msg)
    {
        $this->messages[] = ["status" => $status, "msg" => $msg];
    }

    public function create_hash($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getAllNivelAffiliate()
    {
        $nivel = $this->db->prepare("select * from cn_affiliates_nivel");
        $nivel->execute([]);
        $teste = $nivel->fetchAll();

        foreach ($teste as $key => $value) {
//            $teste[$key] = utf8_decode($value);
            foreach ($value as $kkey=> $vvalue){
                $teste[$key][$kkey] = utf8_encode($vvalue);
            }
        }
        return $teste;
    }


    /**
     * @param $name_nivel_affiliate
     * @param $desc_nivel_affiliate
     * @return array|bool
     */
    public function addNivelAffiliate($name_nivel_affiliate, $desc_nivel_affiliate)
    {
        $nivel = $this->db->prepare("INSERT INTO cn_affiliates_nivel (name_nivel_affiliate, desc_nivel_affiliate)
                                               VALUES (:name_nivel_affiliate, :desc_nivel_affiliate)");
        $nivel->execute([
            "name_nivel_affiliate" => $name_nivel_affiliate,
            "desc_nivel_affiliate" => $desc_nivel_affiliate
        ]);

        if ($nivel->errorCode() == '00000') {
            $success = "Nível de afiliado cadastrado com sucesso.";
            $this->feedbackMessage('success', $success);
        } else {
            $error = "Ocorreu um erro ao cadastrar esse nível no sistema de afiliados.";
            $this->feedbackMessage('error', $error);
        }
        return $this->messages;

    }


    /**
     * @param $id_account
     * @param $id_affiliate_nivel
     * @param $name_affiliate
     * @param $hash_affiliate
     * @param $id_affiliate_father
     * @return bool|array
     */
    public function addAffiliate($id_account, $id_affiliate_nivel, $name_affiliate, $hash_affiliate, $id_affiliate_father)
    {
        $affiliate = $this->db->prepare("INSERT INTO cn_affiliates (id_account, id_affiliate_nivel, name_affiliate, hash_affiliate) 
                                                   VALUES (:id_account, :id_affiliate_nivel, :name_affiliate, :hash_affiliate)");
        $affiliate->execute([
            'id_account' => $id_account,
            'id_affiliate_nivel' => $id_affiliate_nivel,
            'name_affiliate' => $name_affiliate,
            'hash_affiliate' => $hash_affiliate
        ]);
        if ($affiliate->errorCode() == '00000') {
            $success = "Cadastro no sistema de afiliados realizado com sucesso!";
            $this->feedbackMessage('success', $success);
        } else {
            $error = "Ocorreu um erro ao cadastrar-se no sistema de afiliados.";
            $this->feedbackMessage("error", $error);
        }

        $id_affiliate_son = $this->db->lastInsertId();
        $affiliate_bound = $this->db->prepare("INSERT INTO cn_affiliates_bound (id_affiliate_father, id_affiliate_son) 
                                                         VALUES (:id_affiliate_father, :id_affiliate_son)");
        $affiliate_bound->execute([
            'id_affiliate_father' => $id_affiliate_father,
            'id_affiliate_son' => $id_affiliate_son
        ]);
        if ($affiliate_bound->errorCode() == '00000') {
            $success = "Vínculo com o afiliado |NOME| realizado com sucesso!";
            $this->feedbackMessage('success', $success);
        } else {
            $error = "Ocorreu um erro ao selecionar seu afiliado pai, talvez você não seja vinculado a ele corretamente. Caso ache que é um erro entre em contato com o Administrador.";
            $this->feedbackMessage("error", $error);
        }
        return $this->messages;
    }

    public function getAllAffiliates()
    {
        return $this->db->query("SELECT * FROM cn_affiliates")->fetchAll();
    }
}