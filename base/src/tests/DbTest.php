<?php

use Ihsw\Db;

const CONN_DSN = 'pgsql:dbname=postgres;host=db';
const CONN_TRAVIS_DSN = 'pgsql:dbname=postgres;host=localhost';
const CONN_USER = 'postgres';
const CONN_PASSWORD = '';

class HelloTest extends \PHPUnit_Framework_testCase
{
  private $db;

  public function setUp()
  {
    $dsn = CONN_DSN;
    if ($_SERVER['ENV'] === 'travis') {
      $dsn = CONN_TRAVIS_DSN;
    }

    $this->db = new Db(new \PDO($dsn, CONN_USER, CONN_PASSWORD, [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]));
  }

  public function testHasHeroes()
  {
    $heroes = $this->db->getHeroes();
    $this->assertTrue(count($heroes) > 0, 'Has heroes');
  }
}
