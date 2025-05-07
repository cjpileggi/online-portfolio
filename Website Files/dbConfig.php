<?php
/**
* Create class for MySQL database connection using PDO
*
*/

class queryDB {
  /**
  * Class containing PDO create and query funtions
  */

  /**
  * @var PDO $pdo PDO object
  */
  private $pdo;

  /**
  * Initialize PDO object
  */
  public function __construct($HOST, $DBNAME, $UN, $PW) {
    $this->pdo = new PDO("mysql:host=". $HOST . ";dbname=" . $DBNAME, $UN, $PW);
  }

  /**
  * Return results of MySQL database query. Parameters are optional
  *
  * @param string $qry
  * @param array $params
  * @return array
  */
  public function queryRes($qry, $params=NULL ) {
    $sth = $this->pdo->prepare($qry);

    $sth->execute($params);

    return $sth->fetchAll();
  }

  function __destruct() {}
}

// Create queryDB object
$db = new queryDB(DBHOST, DBNAME, DBUN, DBPW);
 ?>
