<?php

use Ihsw\Hello;

const CONN_DSN = 'pgsql:dbname=postgres;host=db';
const CONN_USER = 'postgres';
const CONN_PASSWORD = '';

class HelloTest extends \PHPUnit_Framework_testCase
{
  private $conn;

  public function setUp()
  {
    $this->conn = new \PDO(
      CONN_DSN,
      CONN_USER,
      CONN_PASSWORD,
      [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
    );
  }

  public function testHasHeroes()
  {
    $query = $this->conn->prepare('SELECT * FROM Heroes');
    $query->execute();
    $results = $query->fetchAll(\PDO::FETCH_ASSOC);
    $this->assertTrue(count($results) > 0, 'Has heroes');
  }
}
