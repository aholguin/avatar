<?PHP

/*
 *   @descrición   clase con metodos hacia la base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('model/bd_mysql.php');

class methods extends bd_mysql {

    function getOcupaciones() {
        $sql = "SELECT * FROM `ocupacion` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

    function getNivelEstudio() {
        $sql = "SELECT * FROM `nivel_estudio` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

    function getEstadoCivil() {
        $sql = "SELECT * FROM `estado_civil` WHERE activo = 1;";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

    function insertUsuario($identificacion, $nombre, $aficiones, $tiempo_libre, $practica_deporte, $Deportes, $n_hijos, $nivel_estudio_id, $estado_civil_id, $ocupacion_id, $avatar_id, $genero, $sesion) {

        $sql = "INSERT INTO estudiante (identificacion,nombre,aficiones,tiempo_libre,practica_deporte,Deportes,n_hijos,nivel_estudio_id,estado_civil_id,ocupacion_id,avatar_id,genero,sesion) 
                VALUES($identificacion,'$nombre','$aficiones','$tiempo_libre',$practica_deporte,'$Deportes',$n_hijos,$nivel_estudio_id,$estado_civil_id,$ocupacion_id,$avatar_id,'$genero','$sesion')";
        //die($sql);
        $respuesta = $this->db->Execute($sql);
        return $respuesta;
    }

}

?>