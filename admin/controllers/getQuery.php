<?php 
/**
 * Consulta del registro para mostrarlo en una tabla
 *
 * @param object $conn Recuperar la conexion a Mysql
 * @param string $table Nombre de la tabla a la que se desar consultar
 * @return array $query devolvemos un array asosiativo  con los datos de las tabla
 */
function  getQuery(object $conn, string $table)
{
  $query = $conn->prepare("SELECT * FROM $table");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

?>
