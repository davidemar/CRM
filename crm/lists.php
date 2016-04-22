<?php
session_start();

if(!$_SESSION['AdminLoggedIn'])
{
	header('location: index.php');
}
include_once("includes/functions.php");
include_once("includes/views.php");
include_once("includes/header.php");

$cats = GetCategories();

echo "<div id='menu'>";
echo "<a href='contact.php'>New Client</a>";
echo " | ";
echo "<a href='deleteClient.php'>Delete Client</a>";
echo " | ";
echo "<a href='logout.php' class='logout'>Logout</a>";
echo "</div>";

/*while($cat = mysqli_fetch_assoc($cats))
{
	echo "<h3><a href='category.php?id=".$cat['id']."'>".ucwords($cat["catname"])."</a></h3>";
	
	$contacts = GetContacts($cat["id"]);
	
	DisplayContacts($contacts);
}
*/


$results = getUsuarios();
$Nusuario = 0;
if(mysqli_num_rows($results) > 0){
	while($row = mysqli_fetch_assoc($results)){
		$Nusuario += 1;	
		//echo "Usuario id: ".$row["usuario_id"]." - Compania: ".$row["ncompania"]."- Contraseña: ".$row¨["contrasena"]."- email: ".$row["email"]."- Nombre del usuario: ".$row["pnombre"]."- Apellido: ".$row["papellido"]."- Calle: ".$row["calle"]."<br>";
		echo "<table class = 'table'>";
		echo"</br>"."Numero: ".$Nusuario."</br>";
		echo"<tr class = 'tableRow'><td>Usuario</td><td>Compania</td><td>Contraseña</td><td>email</td><td>Nombre</td><td>Apellido  Paterno</td><td>Apellido materno</td><td>calle</td><td>Numer</td><td>Colonia</td>";
		echo "<tr class = 'tableRow'> <td>".$row['usuario_id']."</td><td>".$row['ncompania']."</td><td>".$row['contrasena']."</td><td>".$row['email']."</td><td>".$row['pnombre']."</td><td>".$row['sapellido']."</td></tr>";
		echo"</table>";

	}

}else{
		echo "0 results";
	}



/*
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
*/
?>
