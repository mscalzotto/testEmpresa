<?php
class Database {

    private $dbh;
    public $lastID;
    // private $db;

    // public function __construct(PDO $db)
    public function __construct($auto_connect = true) {
	// $this->db = $db;

        if (!defined('DB_DBNAME')) {
            require_once(PATH_CFG . 'connection.php');
        }

        if ($auto_connect){
            $this->connect();
        }
    }

    /**
     * Conecta con la base de datos
     *
     */
	private function connect() {
        try {
            $dsn = 'mysql:dbname=' . DB_DBNAME . ';host=' . DB_HOST;
            
            // Esta nueva instancia la realizas POR FUERA de esta clase
            // nada mas que la instancia de pdo va dentro de la instancia de la clase
            // $db = new Database(new PDO....etc);
            $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo  $e->getMessage();
        }
    }

    /**
     * Hace la consulta y devuelve el resultado 
     *
     * @return Array
     * @param string $sql_query SQL query
     */
    public function query($sql_query) {
        
        try {
            $smh = $this->dbh->query($sql_query);
            return $smh->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            /*if error code = HY000 means that fetchall() returned no result*/
            if ($e->getCode() !='HY000') {
                echo $e->getMessage();
            }
        }
    }
}
