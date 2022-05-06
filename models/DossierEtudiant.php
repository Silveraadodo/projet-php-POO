<?php 
class DossierEtudiant{
    private  $id;
    private  $dateOuv;

   
     

    

    //OneToOne  avec Etudiant
    public function Etudiant(){
        return null;
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
     * Get the value of dateOuv
     */ 
    public function getDateOuv()
    {
        return $this->dateOuv;
    }

    /**
     * Set the value of dateOuv
     *
     * @return  self
     */ 
    public function setDateOuv($dateOuv)
    {
        $this->dateOuv = $dateOuv;

        return $this;
    }
}
   