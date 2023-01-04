<?php 
    require_once('../packages/ripcord/ripcord.php');
    require_once('../Config/Conexion.php');

    class LoginServices{

        private $conexion;
        private $db;
        private $url;

        function __construct(){
            $this->conexion = new Conexion();
            $this->db = $this->conexion->getDb();
            $this->url = $this->conexion->getUrl();
        }

        function login($username,$password){
            $common = ripcord::client("$this->url/xmlrpc/2/common");
            $common->version();
            $uid = $common->authenticate($this->db, $username, $password, array());
            return $uid;
        }
    }
?>