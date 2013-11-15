<?PHP

/*
 *   @descrición   clase con metodos hacia la base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('model/bd_mysql.php');

class methods extends bd_mysql {
    
   function getOcupaciones(){
        $sql = "SELECT * FROM `ocupacion` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }
   
    function getNivelEstudio(){
        $sql = "SELECT * FROM `nivel_estudio` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }
    
    function getEstadoCivil(){
        $sql = "SELECT * FROM `estado_civil` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }
    
    
    function setIntentos($user, $nIntento) {
        $sql = "UPDATE usuario set intentos_acceso=$nIntento WHERE nombre_acceso ='{$user}'";
        $respuesta = $this->db->Execute($sql);
    }
}

?>