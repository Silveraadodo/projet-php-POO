<?php 
class Inscription{
    private $date;

     //ManyToOne =>Etudiant
     public function Etudiant():Etudiant{
        return new Etudiant();

    }

     //ManyToOne =>classe
     public function classe():Classe{
        return new Classe();
    }
    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}