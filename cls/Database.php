<?php

class Database {
    
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;

        if (!defined('DB_DBNAME')) {
            require_once(PATH_CFG . 'connection.php');
        }

        $this->connect();
    }

    /**
     * Conecta con la base de datos
     *
     */
	private function connect() {
        try {
            $dsn = 'mysql:dbname=' . DB_DBNAME . ';host=' . DB_HOST;
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
     * @param const $fetchMode PDO fetch mode
     *
     * @return array Result fetched as indicated by $fetchmode
     */
    public function query($sqlQuery, $fetchMode = PDO::FETCH_ASSOC) {
       
        //Tambien deberia recibir las claves como array y reemplazarlas en el prepare
        try {
            $prep = $this->pdo->prepare($sqlQuery);
            $smh = $this->pdo->query($prep->queryString);
            
            return $smh->fetchAll($fetchMode);
        }
        catch (PDOException $e) {
            /*if error code = HY000 means that fetchall() returned no result*/
            if ($e->getCode() !='HY000') {
                echo $e->getMessage();
            }
        }
    }

    public function find($table) {

    }


    /**
     * public function create()
     * 
     * @param $table
     *        database table name
     * @param array $values
     *        values about to be inserted on indicated database table
     * 
     * Builds the proper MySQL query with the given parameters 
     * and executes it over the given database table
     */
    public function create($table, array $values) {
        $columns = $this->getTableColumns($table);
        $columns = implode(',', $columns);

        $lap = 0;
        $insertValues = "";
        foreach ($values as $value) {
            $count = count($values);
            if($lap == $count - 1) {
                $insertValues .= '"' . $value . '"';
            }
            else {
                $insertValues .= '"' . $value . '",';
            }
            $lap++;
        }

        $query = "INSERT INTO " . $table . " (" . $columns . ") VALUES(null," . $insertValues . ")";
        
        return $this->query($query);
    }


    /** 
     * private function getTableColumns()
     * 
     * @param $table
     *        database table name
     * 
     * Retrieves the columns of the given database table
     */
    private function getTableColumns($table) {
        $query = 'SELECT column_name FROM information_schema.columns WHERE table_name = "' . $table . '"';
        $unprocessedColumns = $this->query($query);

        foreach ($unprocessedColumns as $columnName) {
            $columns[] = $columnName['column_name'];
        }

        return $columns;
    }

    public function retrieveEmployeeIds() {
        $query = 'SELECT id_puesto FROM puesto';
        $ids = $this->query($query);

        foreach ($ids as $idPuesto) {
            $id[] = $idPuesto['id_puesto'];
        }

        var_dump($id);
    }
 
 }
