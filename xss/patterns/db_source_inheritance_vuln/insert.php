<?php

require_once('databaseImpl.php');

$db = new DatabaseImpl();

// $db->create();

$id = $_GET['id'];
$param = $_GET['value'];

if($param != null && $id != null)
{
    $db->insert($id, $param);
    $output = 'Successfully inserted.';
}
else {
    $output = 'id and value are required.';
}

echo $output;

// phpinfo();

?>