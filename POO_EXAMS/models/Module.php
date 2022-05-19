<?php 
 namespace App\Models;
class Module{
   private int $id;  
   private string $libelle;


   //Association 
   //ManyToMany avec Professeur
     //Un Objet de type Module contient plusieurs objets de type professeur
     public function professeurs():array{
      $sql="select p.* from professeurs p, 
      module md where p.module_id=md.id and md.id=? 
      ";
         return [];
     }
   //OneToMany avec Cours
     //Un Objet de type Module contient plusieurs objets de type Cours

     public function cours():array{

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
}