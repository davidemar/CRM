<?php

function ProcessLogin($post)
{
	$connection = GetConnection();
	$query = "select * from administrator where username = '".$post['username']."' and password = '".$post['pass']."' LIMIT 1";
    $GLOBALS['ActualUser'] =  $post['username'];
    $results = mysqli_query($connection,$query);
    if(mysqli_num_rows($results)>0){
        $row = mysqli_fetch_assoc($results);
        $_SESSION['AdminLoggedIn'] = true;
        $_SESSION['id'] = $row["id"];
        $_SESSION['username'] = $row['username'];
        return true;
    }else{
       return false; 
    }
}

function ProcessUserLogin($post){
    $connection = GetConnection();
    $query = "select * from usuario where usuario_id = '".$post['username']."' and contrasena = '".$post['pass']."' LIMIT 1";
    $results = mysqli_query($connection,$query);
    if(mysqli_num_rows($results)>0){
        $row = mysqli_fetch_assoc($results);
        $_SESSION['UserLoggedIn'] = true;
        $_SESSION['id'] = $row["id"];
        $_SESSION['username'] = $post['username'];
        return true;
    }else{
       return false; 
    }
}

function GetCategories()
{
        $conn = GetConnection();
        //$query = "select * from categories";
        $query = "select * from usuario";
        $results = mysqli_query($conn,$query);
        

        return $results;
}

function GetContacts($catId)
{   
    $conn = GetConnection();
    $query = "select * from contacts where catid ='$catId'";
    $query = "select * from usuario";
    $results = mysqli_query($conn,$query);

    return $results;
}


function GetContact($id)
{
    $conn = GetConnection();
    $query = "select * from contacts where id ='$id'";
    
    $results = mysqli_query($conn,$query);
    return $results;
}

function GetCategory($id)
{

}
function prueba()
{   $x = 'ya jala';
    return $x;
}
function GetConnection()
{
		$connection = mysqli_connect('localhost','root','root','crm');
        mysqli_select_db('crm');
         if (mysqli_connect_errno()){
            
            echo "Fallo la conexion a MySQL: " . mysqli_connect_error();
            }
		
		return $connection;
}


function DisplayErrorMessage($msg)
{
		echo "<div class = 'err'>$msg</div>";
}


function setClientData($query)
{
    $conn = GetConnection();
    $results = mysqli_query($conn,$query);
    if($results){
        ?>
                <script>alert('Exitosamente Registrado');</script>
        <?php
        return true;
    }else{
        ?>
        <script>alert('Fallo el registro');</script>
        <?php
        return false;
    }
}


   function setOrden($query)
   {
    $conn = GetConnection();
    $results = mysqli_query($conn,$query);
    if($results)
    {   
        ?>
                <script>alert('Compra Exitosa');</script>
        <?php
        return true;
    }else {
         ?>
        <script>alert('Fallo la compra');</script>
        <?php
        return false;
    }
   } 
    
    

function setComplain($query)
{
    $conn = GetConnection();
    $results = mysqli_query($conn,$query);
    if($results){
        ?>
                <script>alert('Su queja ha sido registrada ');</script>
        <?php
        return true;
    }else{
        ?>
        <script>alert('Su queja no ha podido ser registrada, intente denuevo mas tarde');</script>
        <?php
        return false;
    }
}

function deleteClientData($query)
{
    $conn = GetConnection();
    $results = mysqli_query($conn,$query);
    if($results){
        ?>
                <script>alert('cliente eliminado ');</script>
        <?php
        return true;
    }
}

function getUsuarios(){
    $conn = GetConnection();
    $query = "select * from usuario";
    
    $results = mysqli_query($conn,$query);
    return $results;
}

function getSizeOfQuejaRow()
{
    $conn = GetConnection();
    $query = "select count(queja_id) cantidad from queja;";
    $results = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($results);
    $desplegar = $row['cantidad'];
    return $desplegar;
}
function getSizeOfRowOrden_id()
{
    $conn = GetConnection();
    $query = 'select count(orden_id) cantidad from orden;';
    $results = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($results);
    $regresar = $row['cantidad'];
    return $regresar;
}

function getUsersPerMonth()
{
    $conn = GetConnection();
    $query = "SELECT dia,count(usuario_id) users from usuario where dia like '2016%'  GROUP BY year(dia), month(dia)
ORDER BY year(dia), month(dia);";
    $results = mysqli_query($conn,$query);
    return $results;
}
function getAnualSales()
{
    $conn = GetConnection();
    $query = "SELECT fecha,sum(total) ventas,usuario from orden where fecha like '2016%'GROUP BY year(fecha), month(fecha) ORDER BY year(fecha), month(fecha)";
    $results = mysqli_query($conn,$query);
    return $results;
}
function getInfoProduct($producto)
{
    $conn = GetConnection();
    $query = "SELECT * from producto where producto_id = '$producto';";
    $results = mysqli_query($conn,$query);
    return $results;
}
function getQueryBestBuyer(){
     $conn = GetConnection();
    $query = "SELECT sum(total) venta,usuario from orden where fecha like '2016%' group by usuario";
    $results = mysqli_query($conn,$query);   
    return $results;
}


function bigger($x,$y)
{
    if($x>$y)
    {
          return $x;  
    }else {
        return $y;
    }
}
function smaller($x,$y)
{
    if($x<$y)
    {
        return $x;
    }else {
        return $y;
    }
}

function getMonthText($month)
{
    switch($month){
            case 1: 
                return 'Enero';
            case 2:
                return  'Febrero';
            case 3:
                return 'Marzo';
            case 4:
                return 'Abril';
            case 5:
                return 'Mayo';
            case 6:
                return  'Junio';
            case 7:
                return  'julio';
            case 8:
                return 'Agosto';
            case 9:
                return  'Septiembre';
            case 10:
                return 'Octubre';
            case 11:
                return 'Noviembre';
            case 12:
                return 'Diciembre'; 
            default:
                echo "error";
             
        }
}
function bestClient(){
    $firstResult = mysqli_fetch_assoc(getQueryBestBuyer());

    $usuarioMayor = $firstResult['usuario'];
    $compraMayor = 0.0;
    $buyers = getQueryBestBuyer();   
    while($row = mysqli_fetch_assoc($buyers))
    {    
        $compraMayor = bigger($compraMayor,$row['venta']);
        
        if($compraMayor == $row['venta'])
        {
            $usuarioMayor = $row['usuario'];
        }else if($compraMayor == 0.0)
        {   
            $usuarioMayor = 'no hay compra mayor';
        }
    
    
} return $usuarioMayor;
}

function getSalesByMonthForUser($usuarioid)
{   $conn = GetConnection();
    $query = "SELECT fecha,sum(total) ventas,usuario from orden where fecha like '2016%' and usuario = '$usuarioid' GROUP BY year(fecha), month(fecha),usuario ORDER BY year(fecha), month(fecha)";
    $results = mysqli_query($conn,$query);
    return $results;
}

function getAllUsers()
{   
    $conn = GetConnection();
    $query = "SELECT usuario from orden where fecha like '2016%' GROUP BY usuario";
    $results = mysqli_query($conn,$query);
    return $results;
}
function setVipUser($usuario)
{
    $conn = GetConnection();
    $query = "INSERT INTO vipUsuario(usuarioid) VALUES ('$usuario')";
    $results = mysqli_query($conn,$query);
    return $results;
}
function getTodaysDate()
{
    $fechaActual = date("y-m-d");   
    return $fechaActual;
}
?>