<?php 
namespace App\Models;
//RP herite de User
class RP extends User{

    public function __construct()
    {

        parent::__construct();
        parent::$role="ROLE_RP";
        
    }

    public static  function selectAll(){
        
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
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