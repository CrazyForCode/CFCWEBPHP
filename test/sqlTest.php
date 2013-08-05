<?php
require_once 'PHPUnit/Extensions/Database/TestCase.php';

/**
 * test case.
 */
class sqlTest extends PHPUnit_Extensions_Database_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated sqlTest::setUp()
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated sqlTest::tearDown()
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	/* (non-PHPdoc)
	 * @see PHPUnit_Extensions_Database_TestCase::getConnection()
	 */
	protected function getConnection() {
	 if($this->_connectionMock == null) {
	 	$params = array (
	 			'host' => 'localhost',
	 			'username' => 'root',
	 			'password' => '6191080',
	 			'dbname' => 'cfcwebphp'
	 	);
            $connection = Zend_Db::factory('PDO_MYSQL', $params);
            $this->_connectionMock = $this->createZendDbConnection(
                $connection, 'sql'
            );
            Zend_Db_Table_Abstract::setDefaultAdapter($connection);
        }
        return $this->_connectionMock;
    }


	/* (non-PHPdoc)
	 * @see PHPUnit_Extensions_Database_TestCase::getDataSet()
	 */
	protected function getDataSet() {
		// TODO Auto-generated method stub
		echo "d";
	}
	public function testsql(){
	
	}

}

