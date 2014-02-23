<?php
class Database {

    //private $dbh;
    public $lastID;
    private $db;

    public function __construct(PDO $db) {
        // Intentamos setear la dependencia para uso local
        // y setearle los attributos correspondientes...
        try {
          // Lanzamos una excepcion de tipo EXCEPTION si db name no esta definido
          if (!defined('DB_DBNAME'))
            throw new Exception('DB_DBNAME no esta definido');

          $this->db = $db;
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        }

        // Aca atrapamos las excepciones de tipo PDOException
        // Osea las excepciones producidas por tal clase.
        catch (PDOException $e) {
          die($e->getMessage());
        }

        // Aca atrapamos las excepciones de tipo Exception
        // Osea las excepciones producidas por tal clase.
        // x ej: la de la linea 14
        catch (Exception $e) {
          die($e->getMessage());
        }

    }

    /**
     * Conecta con la base de datos
     *
     */

  // Desde que la coneccion se realiza en la ID
  // este metodo no es necesario...
    // $db = new Database(New PDO()); <-- Conexion
  // private function connect() {
  //       try {
  //           $dsn = 'mysql:dbname=' . DB_DBNAME . ';host=' . DB_HOST;
            
  //           // Esta nueva instancia la realizas POR FUERA de esta clase
  //           // nada mas que la instancia de pdo va dentro de la instancia de la clase
  //           // $db = new Database(new PDO....etc);
  //           $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
  //           $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //       }
  //       catch(PDOException $e) {
  //           echo  $e->getMessage();
  //       }
  //   }

    /**
     * Hace la consulta y devuelve el resultado 
     *
     * @return Array
     * @param string $sql_query SQL query
     */
    public function query($sql_query) {
        
        try {
            $smh = $this->db->query($sql_query);
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
