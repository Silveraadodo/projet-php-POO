<?php
namespace App\Core;

use App\Core\IModel;

abstract class Model implements IModel{
    protected static string $table;
    protected static DataBase|null $database=null;//l'nstance est nulle

    public function insert(){

    }
    public function update(){

    }
    public static function database():DataBase{
        //Disine paterne Singleton
        //objectif un gain de memoire en central
        if(self::$database==null){
            self::$database=new DataBase;
        }
        return self::$database;
        
    }
    public static function delete(int $id){
        $sql="delete  from ".self::$table." where id=?";
       return self::database()->executeUpdate($sql,[$id]);


    }
    public static  function selectAll(){
        $sql="select *  from  ".self::$table;
       return self::database()->executeSelect($sql);

    }
    public static  function selectById(int $id){
        $sql="select *  from ".self::$table."  where id=?";
       return self::database()->executeSelect($sql,[$id]);


    }
    public static function selectWhere(string $sql,array $data=[],$single=false){
        return self::database()->executeSelect($sql,$data,$single);
    }

}