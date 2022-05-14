<?php 
namespace App\Models;
class Etudiant extends User{
    private string $nom;
    private string $prenom;
    private string $matricule;
    public function __construct()
    {
        parent::$role="ROLE_ETUDIANT";
    }
    public static function selectAll(){
        $sql="select from ? where role like ?";
       return parent::database()->executeSelect($sql,[parent::$table,parent::$role]);

   }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
    public function setRole($role)
        {
            return $this;
        }
}