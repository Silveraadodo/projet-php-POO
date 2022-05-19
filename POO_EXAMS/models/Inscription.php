<?php

use Etudiant;
use App\Core\DataBase;
use App\Core\Model;
use App\Models\Classe;

class Inscription extends Model{
    private int $id;
    private DateTime $dateIns;
    private string $annee;
    //les attributs navigationnels
    //lorsque l'on a une relation many to many dans une classe d'association
    //c'est cassé en des relations OneToMany, ManyToOne
    

    public function insert(){
         
    }
    public function update(){

    }
    /* public static function database():DataBase{
        //Singleton=> Gain de Memoire
        
    } */
    /* public static function delete(int $id){
        $sql="delete from inscrption where id={$id} ";
        self::database()->executeUpdate($sql,[$id]);
    } */
    public static function selectAll(){
        $sql="select *  from inscription";
    }
    public static function SelectById(int $id){
        $sql="select *  from  inscription where id={$id} ";
       
    }
    /* public static function SelectWhere(string $sql,array $data=[],$single=false) {
        return self::database()->executeSelect($sql,$data,$single);
        
    } */
    //Plusieurs inscriptions dans une classe, Une classe plusieurs inscriptions
    //many to one avec classe
    public function classe():Classe{
        $sql="select c.* from inscription i,classe c where c.id=i.classe_id where i.id={$this->id}";
        return new Classe();
    }
    //many to one avec Etudiant
    public function etudiant():Etudiant{
        $sql="select e.* from inscription i,etudiant e where c.id=i.etudiant_id where i.id={$this->id}";
        return new Etudiant();
    }

    /* public function __construct(){
        parent::$table="inscription";
    } */

    /**
     * Get the value of dateIns
     */ 
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

  
     /**
      * Get the value of etudiant
      */ 
     public function getEtudiant()
     {
          return $this->etudiant;
     }

     /**
      * Set the value of etudiant
      *
      * @return  self
      */ 
     public function setEtudiant($etudiant)
     {
          $this->etudiant = $etudiant;

          return $this;
     }
}