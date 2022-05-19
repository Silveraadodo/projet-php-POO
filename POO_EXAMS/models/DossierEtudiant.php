<?php

class DossierEtudiant{
    private \DateTime $dateOuverture;
    //OnetToOne avec Etudiant
    public function etudiant():Etudiant{
        $sql="select m.* from etudiant et,
           dossieretudiant de where et.dossieretudiant_id=de.id and de.id={$this->id}";
       return new Etudiant();
   }
   
    /**
     * Get the value of dateOuverture
     */ 
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * Set the value of dateOuverture
     *
     * @return  self
     */ 
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }
}