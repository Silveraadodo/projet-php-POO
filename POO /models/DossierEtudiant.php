<?php 
namespace App\Models;
use App\Core\Model;
class DossierEtudiant extends Model{
    private int $id;
    private string $date_ouverture;

    public function __construct()
     {
        parent::$table="dossieretudiant";    
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
     * Get the value of date_ouverture
     */ 
    public function getDate_ouverture()
    {
        return $this->date_ouverture;
    }

    /**
     * Set the value of date_ouverture
     *
     * @return  self
     */ 
    public function setDate_ouverture($date_ouverture)
    {
        $this->date_ouverture = $date_ouverture;

        return $this;
    }
}