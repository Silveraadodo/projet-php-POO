<?php 
namespace App\Models;
use App\Core\Model;
class Inscription extends Model{
    private int $id;
    private string $dateInscription;

    public function __construct()
     {
        parent::$table="inscription";   
     } 
     public function classes():array{
         $sql="select cl.* from classe cl,
               inscription i where cl.inscription_id=i.id and i.id=?
               ";
              parent::selectWhere($sql,[$this->id]);

         return [];
     } 


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}