<?php

error_reporting(E_ALL);

if (function_exists("oci_connect")) {
    echo "oci_connect found\n";
} else {
    echo "oci_connect not found\n";
    exit;
}

$host = 'localhost';
$port = '1480';

// Oracle service name (instance)
$db_name     = 'orcl';
$db_username = "system";
$db_password = "123456";

$tns = "(DESCRIPTION =
	(CONNECT_TIMEOUT=3)(RETRY_COUNT=0)
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = $db_name)
    )
  )";
$tns = "$host:$port/$db_name";

try {
    $conn = oci_connect($db_username, $db_password, $tns);
    if (!$conn) {
        $e = oci_error();
        throw new Exception($e['message']);
    }
    echo "Connection OK\n";
    
    $stid = oci_parse($conn, 'SELECT * FROM ALL_TABLES');
    
    if (!$stid) {
        $e = oci_error($conn);
        throw new Exception($e['message']);
    }
    // Perform the logic of the query
    $r = oci_execute($stid);
    if (!$r) {
        $e = oci_error($stid);
        throw new Exception($e['message']);
    }
    
    // Fetch the results of the query
    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
        $row = array_change_key_case($row, CASE_LOWER);
        print_r($row);
        break;
    }
    
    // Close statement
    oci_free_statement($stid);
    
    // Disconnect
    oci_close($conn);
    
}
catch (Exception $e) {
    print_r($e);
}