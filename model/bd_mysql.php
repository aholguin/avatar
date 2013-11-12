<?PHP

/*
 *   @descrición   clase de conexión  general al a base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('include/bd/adodb5/adodb.inc.php');

class bd_mysql extends ADOConnection {

    var $dbdriver = 'mysql';
    var $servidor = 'localhost';
    var $usuario = 'root';
    var $contraseña = '';
    var $database = 'enrrutamiento';
    var $db;

    function __construct() {
        $this->db = ADONewConnection($this->dbdriver); # eg 'mysql' o 'postgres'
        //$this->db->debug = true;
        $this->db->Connect($this->servidor, $this->usuario, $this->contraseña, $this->database);
        $this->db->Execute("SET NAMES 'utf8'");
    }

}

?>