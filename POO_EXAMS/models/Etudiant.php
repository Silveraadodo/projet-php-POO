<?php
use App\Models\User;
use App\Models\Adresse;

class Etudiant extends User{
        //Attributs d'instance
        private int $id;
        private string $nomComplet;
        private string $matricule;

           //les attributs navigationnels
        
        public function Inscription():array{
            $sql="select i.* from inscripions i, 
              etudiant et where i.etudiant_id=et.id and et.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
            return [];
        }
        //OneToOne avec DossierEtudiant
        public function DossierEtudiant():DossierEtudiant{
            $sql="select m.* from dossieretudiant de,
            etudiant et where de.etudiant_id=et.id and et.id={$this->id}";
            return new DossierEtudiant();
        }
        //OneToOne avec Adresse
        public function adresse():Adresse{
            $sql="select m.* from adresse ad,
            etudiant et where ad.etudiant_id=et.id and et.id={$this->id}";
           return new Adresse();
       }
        //Methodes
        public function __construct(){
            //On appelle le constructeur qui permet d'instancier 
            parent::__construct();
            parent::$role="ROLE_ETUDIANT";
        }

        //setters ou mutateurs
        //setters de nomComplet
        public function setNomComplet(string $nomComplet):void{

            $this->nomComplet=$nomComplet;
        }
        //setters de matricule
        public function setMatricule(string $matricule):void{
            $this->matricule=$matricule;
        }
        //les getters permettent d'obtenir la valeur d'un att privée ou proteted
        //getter nomComplet-
        public function getNomComplet():string{
            return $this->nomComplet;
        }
        //getter matricule
        public function getMatricule():string{
            return $this->matricule;
        }


            /**
             * Get the value of inscriptions
             */ 
            public function getInscriptions()
            {
                        return $this->inscriptions;
            }

            /**
             * Set the value of inscriptions
             *
             * @return  self
             */ 
            public function setInscriptions($inscriptions)
            {
                        $this->inscriptions = $inscriptions;

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
                $sql="select *  from ".parent::$table." where role like ?";
                return parent::database()->executeSelect($sql,[parent::$role]);
            }
}
        