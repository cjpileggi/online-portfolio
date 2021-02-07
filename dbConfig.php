<?php
define('DBHOST', "localhost");
define('DBNAME', "portfolio_main");
define('DBUN', "root");
define('DBPW', "");

class queryDB {

  private $pdo;

  public function __construct($HOST, $DBNAME, $UN, $PW) {
    $this->pdo = new PDO("mysql:host=". $HOST . ";dbname=" . $DBNAME, $UN, $PW);
  }

  public function queryRes($qry, $params=NULL ) {
    $sth = $this->pdo->prepare($qry);

    $sth->execute($params);

    return $sth->fetchAll();
  }

  function __destruct() {}
}

$db = new queryDB(DBHOST, DBNAME, DBUN, DBPW);
 ?>
