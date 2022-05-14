<?php 
namespace App\Models;
class Professeur  extends User{
    private string $grade;
    private string $nomComplet;
    private Adresse $adresse;
    public function __construct()
    {
        parent::$role="ROLE_PROFESSEUR";
        $this->adresse=new Adresse;
    }

    public function adress():Adresse{
        return new Adresse();
    }
     //OneToMany avec Cours
    //Une Professeur associee a plusieurs cours
    public function cours():array{
        return [];
    } 
        

    //ManyToMany avec Module
    
    public function modules():array{
        return [];
    }

    //OneToOne  avec Adresse
    public function adresse():Adresse|null{
        return null;
    }
    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    //Redefinition => evolution
      //1-Heritage de Methode
      //2-Redefinir=> changer son comportement
       /**
       * Set the value of role
       *
       * @return  self
       */ 
      public function setRole($role)
      {
          return $this;
      }

      public static function selectAll(){
        $sql="select from ? where role like ?";
       return self::database()->executeSelect($sql,[parent::$table,parent::$role]);

   }

   public function insert(){
    $sql="INSERT INTO ? (`login`,`password`, `grade`, `ville`, `quartier`, `role`,nom_complet)
         VALUES (?,?,?,?,?,?,?);";
    return parent::database()->executeUpdate($sql,[
                    parent::$table,
                    $this->login,$this->password,$this->grade,
                    $this->adresse->getVille(),  $this->adresse->getQuartier(),
                    parent::$role,$this->nomComplet]);
}
    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}