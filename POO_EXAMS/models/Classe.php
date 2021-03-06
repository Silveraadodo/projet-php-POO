<?php
namespace App\Models; 
 use App\Core\Model;
class Classe extends Model{
    //Attribut d'instances => attribut crées pour chaque objet 
    private int $id;  
    private string $libelle;
    private string $niveau;
    private string $filiere;
    //Methodes
        //Instances
    public function __construct()
    {
        parent::$table="classe";
    }
    //OneToMany avec Inscription
    //Une classe plusieurs inscriptions
    //1-Methode 1 a utiliser sur java
     //private array $inscription=[];
     //1-Methode 2
        public function inscription():array{
            $sql="select i.* from inscripions i, 
              classe cl where i.classe_id=cl.id and cl.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
            return [];
        }
    //OneToMany avec Cours
       //Un objet de type Classe contient plusieurs objets de type Cours
       public function cours():array{
        $sql="select c.* from cours c, 
              classe cl where c.classe_id=cl.id and cl.id=? 
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}