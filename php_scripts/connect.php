<?php

/*$servername = "localhost";
$username = "id5218096_siya";
$password = "25217382";
$db = "id5218096_system_db";*/

class Connection {

	private $servername;
	private $username;
	private $password;
	private $databaseName;


	public
	function setServerName( $newName ) {
		$this->servername = $newName;
	}
	public
	function getServerName() {
		return $this->servername;
	}
	public
	function setUsername( $newValue ) {
		$this->username = $newValue;
	}
	public
	function getUsername() {
		return $this->username;
	}

	public
	function setPassword( $newPass ) {
		$this->password = $newPass;
	}
	public
	function getPassword() {
		return $this->password;
	}
	public
	function setDbName( $newDb ) {
		$this->databaseName = $newDb;
	}
	public
	function getDbname() {
		return $this->databaseName;
	}

}

$conn_object = new Connection();

$conn_object->setServerName("localhost");
$conn_object->setUsername("root");
$conn_object->setPassword("");
$conn_object->setDbName("more_bookings");


$conn = mysqli_connect( $conn_object->getServerName(), $conn_object->getUsername(), $conn_object->getPassword(), $conn_object->getDbname() );

if ( !$conn ) {
	echo( "connection error :" . mysqli_connect_error() );
}
//testing
else{
	/*echo("we good!");*/
}

?>