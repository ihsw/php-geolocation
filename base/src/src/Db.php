<?php namespace Ihsw;

class Db
{
  private $conn;

  public function __construct(\PDO $conn)
  {
    $this->conn = $conn;
  }

  public function getHeroes()
  {
    $query = $this->conn->prepare('SELECT * FROM Heroes');
    $query->execute();
    return $query->fetchAll(\PDO::FETCH_ASSOC);
  }
}
