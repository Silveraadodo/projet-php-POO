<?php
namespace App\Models;
class Ac extends User{
    public function __construct()

    {
        parent::$role="ROLE_AC";
  
    }
    public static function selectAll(){
        $sql="select from ? where role like ?";
       return parent::database()->executeSelect($sql,[parent::$table,parent::$role]);

   }



    public function setRole($role)
    {
        return $this;
    }

}