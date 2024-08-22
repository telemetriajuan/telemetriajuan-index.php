<?php
class Conexion {
  public static function conectar(){
  //mysql://dfniks4yyqe7n8pk:fbltzsubeqtkbih4@h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/lo7bgoq5cdqdglaz
  $user = "dfniks4yyqe7n8pk";
  $host =  "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $db_name = "lo7bgoq5cdqdglaz";
  $pass = "fbltzsubeqtkbih4";
  return new mysqli($host, $user, $pass, $db_name, 3306);
}

public static function ejecutarSQL($sql){
    return self::conectar()->query($sql);
  }
public static function cerrarConexion() { 
  return self::conectar()->close();
  }
}
?>
