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
        $id = NULL;
        if ($respuesta) {
            $id = $identificacion;
        }
        return $id;
    }

    function getDatosUsario($identificacion) {
        $sql = "SELECT * FROM `estudiante` WHERE identificacion = $identificacion";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

    function getAvatares($genero) {
        $sql = "SELECT * FROM `avatar` WHERE genero = '$genero'";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

    function setAvatar($identificacion, $avatar_id) {
        $sql = "UPDATE `estudiante` SET avatar_id=$avatar_id WHERE identificacion = $identificacion";
        $respuesta = $this->db->Execute($sql);
        return $respuesta;
    }

    function getPreguntas($escenario) {
        $sql = "SELECT 
                p.id as p_id,
                p.nombre as nombre_pregunta,
                p.descripcion_general,
                p.imagen,
                p.activo,
                p.orden,
                p.tipo_pregunta_id,
                p.escenario_id,
                r.id as r_id,
                r.nombre as nombre_respuesta,
                r.descripcion_general as descripcion_general_respuesta,
                r.activo            
                FROM pregunta p
                INNER JOIN pregunta_has_respuesta pr ON (p.id= pr.pregunta_id )
                INNER JOIN respuesta r ON (pr.respuesta_id = r.id)
                WHERE p.escenario_id = $escenario;
                ";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }

}

?>