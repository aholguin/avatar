<?PHP

/*
 *   @descrición   clase de conexión  general al a base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('include/bd/adodb5/adodb.inc.php');

class bd_mysql extends ADOConnection {

    var $dbdriver = 'mysql';
    var $servidor = '172.16.7.75';
    var $usuario = 'root';
    var $contraseña = '';
    var $database = 'vocavatar';
    var $db;

    function __construct() {
        $this->db = ADONewConnection($this->dbdriver); # eg 'mysql' o 'postgres'
        //$this->db->debug = true;
        $this->db->Connect($this->servidor, $this->usuario, $this->contraseña, $this->database);
        $this->db->Execute("SET NAMES 'utf8'");
    }

}

?>