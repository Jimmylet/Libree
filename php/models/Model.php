<?php
/**
 * Model.php
 * Créé par : Jimmy Letecheur
 * Date : 19/05/16
 */

class Model
{
    /* Créer connection PDO */
    public function __construct()
    {
        $dbConfig = parse_ini_file('db.ini');
        $pdoOptions = [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];

        try {
            $dsn = sprintf(
                '%s:dbname=%s;hosts=%s',
                $dbConfig['driver'],
                $dbConfig['dbname'],
                $dbConfig['host']
            );
            $this->cn = new \PDO(
                $dsn,
                $dbConfig['username'],
                $dbConfig['password'],
                $pdoOptions
            );
            $this->cn->exec('SET CHARACTER SET UTF8');
            $this->cn->exec('SET NAMES UTF8');
        } catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }

}
