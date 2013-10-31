<?php
//ENVIRONMENT SETTINGS BASED ON HOST
switch ($_SERVER["HTTP_HOST"])
{
	case "partners.marshassoc.com": // Production envirionment
		define("MYSQL_HOST", 		"localhost");
		define("MYSQL_USERNAME", 	"web_partners");
		define("MYSQL_PASSWORD", 	"lwOKSSqOKk");
		define("MYSQL_DATABASE", 	"partners_site");
		break;

	case "partners-dev.marshassoc.com": // Mac dev environment
		define("MYSQL_HOST", 		"mai-chi-fm.marshassoc.com");
		define("MYSQL_USERNAME", 	"maiportaluser");
		define("MYSQL_PASSWORD", 	"uV7wEb7gi3Ls3e");
		define("MYSQL_DATABASE", 	"dotcom");
		break;

}

//RETURNS: ARRAY OF 0 INDEX VALUES
function call_first_field($query) 
	{
	$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
	$result = $mysqli->query("$query");

	//MAKE RESULT INTO ARRAY
	while($row = $result->fetch_array())
		{$rows[] = $row[0];}

	//CLOSE MYSQLI RESOURCES	
	$result->close();
	$mysqli->close();
		
	//RETURN RESULT	
	return $rows;	
	}

//RETURNS: ARRAY OF ALL VALUES REQUESTED
function call_all_results($query) 
	{
	$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);	
	$result = $mysqli->query("$query");

	//MAKE RESULT INTO ARRAY
	while($row = $result->fetch_assoc())
		{$rows[] = $row;}

	//CLOSE MYSQLI RESOURCES	
	$result->close();
	$mysqli->close();
		
	//RETURN RESULT	
	return $rows;	
	}

//RETURNS: ONE RESULT
function call_one_result($query) 
	{
	//GET VARS AND CALL FUNCTION
	$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);	
	$return = $mysqli->query("$query");
	$return = $return->fetch_row();
	$return = $return[0];
	$mysqli->close();
																
	//RETURN RESULT
    return $return;
	}	

//RETURNS: NOTHING
function perform($query) 
	{
	//GET VARS AND CALL FUNCTION
	$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);	
	$mysqli->query("$query");
	
	//CLOSE MYSQLI RESOURCES	
	$mysqli->close();
	}
	
//RETURNS: ARRAY OF ALL VALUES REQUESTED
function call_only_last_insert($query) 
	{
	$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);	
	$mysqli->query("$query");
	$last_insert = $mysqli->insert_id;
	$mysqli->close();

	//RETURN RESULT
	return $last_insert;
	}	
?>