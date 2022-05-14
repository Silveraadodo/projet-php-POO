<?php
namespace App\Core;

use LDAP\Result;

class DataBase{
    //Connexion à la  base des donnees
    private \PDO|null $pdo=null; //Pas de Connexion
    //Mode Deconnecte
    public function openConnexion()
    //Hoste adresse BD
    {
        try{
            //essaie de te connecter
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire_l2;host=127.0.0.1","root");

        }catch(\Exception $ex){
            die("erreur de connexion veillez contacter votre admin");

        }
        
    }
    
    public function closeConnexion()
    {
        $this->pdo=null;
    }
    public function executeSelect(string $sql,array $data=[],$single=false)
    {
        $this->openConnexion();
        //"select * from classe where id=? and role like ?;
        $stm=$this->pdo->prepare($sql);
        $stm->execute($data);
        if($single){
            $result=$stm->fetch();
        }else{
            $result=$stm->fetchAll();
        }
        $this->closeConnexion();
        return $result;

        
    }
    public function executeUpdate(string $sql,array $data=[]):int
    {
        $this->openConnexion();
        //"select * from classe where id=? and role like ?;
        $stm=$this->pdo->prepare($sql);
        $stm->execute($data);
        $result=$stm->rowCount();
        $this->closeConnexion();
        return $result;
       
    }
}