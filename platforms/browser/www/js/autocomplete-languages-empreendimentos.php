<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/html; charset=UTF-8');

$bdados = "lucianolopes15_obras";
$host = "robb0217.publiccloud.com.br";
$user = "lucia_obras";
$senha = "obras212116//**";



$conn = mysql_connect($host,$user,$senha) or die("Não pude conectar: " . mysql_error());
$db = mysql_select_db($bdados,$conn);
$sql = mysql_query("select id, nome from empreendimento order by nome");

//$db = new mysqli($host, $user, $senha, $bdados, );
//$db = mysql_select_db($bdados,$conn);

$arr = array();


	while ($d = mysql_fetch_assoc($sql)){
       $arr[] = array('id' => $d['id'], 'name' => utf8_encode($d['nome']));
	}

//$arr = array( array('id' => '0', 'name' => 'luciano'), array('id' => '1', 'name' => 'marilene'), array('id' => '2', 'name' => 'junior'));
//$db->close();

echo json_encode($arr);
?>