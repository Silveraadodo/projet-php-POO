<?php
class Etudiant extends User{
    private  $age;

    public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }


     //ManyToOne =>classe
    public function classe():Classe{
        return new Classe();
    }

    //ManyToMany =>cours
    public function cours():array{
        return [];
     }

      //OneToOne  avec DossierEtudiant
    public function DossierEtudiant(){
        return null;
    }
    //OneToMany avec Inscription
    public function Inscription():array{
        return [];
    }
     

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

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
}

