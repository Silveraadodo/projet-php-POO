<?php
use App\Models\User;
class AC extends User{

    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_AC";
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