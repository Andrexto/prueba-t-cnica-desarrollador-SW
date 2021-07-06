<?php
//se incluye el archivo conexion.php el cual tiene la conexion a la base de datos
include ("conexion.php");

//SQL que pide la informacion de la base de datos y se almacena en la variable r, en ella se ven la condiciones que cuentan 
//y verifican que departamentos tienen mas de 2 empleados
$r = mysqli_query($conexion,"SELECT UNIC_department.department_name, COUNT(*) AS 'Num empleados' FROM UNIC_employee, UNIC_department
WHERE UNIC_employee.department_id=UNIC_department.id GROUP BY UNIC_department.department_name HAVING COUNT(*)>=2; ");

//ciclo para recorrer y mostrar el array con la informacion obtenida
while ($fila =mysqli_fetch_array($r)){
  
    echo $fila["department_name"];
    echo " - "; // un separador
    echo $fila["Num empleados"];
    echo "</p>";
    }

?>