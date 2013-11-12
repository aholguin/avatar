<?PHP

/*
 *   @descrición   clase con metodos hacia la base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('model/methods.php');

class methods extends bd_mysql {
   function getUser($user) {
        $sql = "SELECT id,intentos_acceso,perfil_id,institucion_id FROM `usuario` WHERE nombre_acceso = '{$user}';";
        $respuesta = $this->db->Execute($sql)->GetArray();
        return $respuesta;
    }
    function setIntentos($user, $nIntento) {
        $sql = "UPDATE usuario set intentos_acceso=$nIntento WHERE nombre_acceso ='{$user}'";
        $respuesta = $this->db->Execute($sql);
    }
}

?>