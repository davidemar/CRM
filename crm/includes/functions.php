<?php

function ProcessLogin($post)
{
	$connection = GetConnection();
	$query = "select * from administrator where username = '".$post['username']."' and password = '".$post['pass']."' LIMIT 1";
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
        $_SESSION['username'] = $row['username'];
        return true;
    }else{
       return false; 
    }
}



function UpdateContact($post)
{

}

function SaveContact($post)
{

}
function UpdateCategory($post)
{

}

function SaveCcategory($post)
{

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

function GetConnection()
{
		$connection = mysqli_connect('localhost','root','root','crm');
        mysqli_select_db('crm');
         if (mysqli_connect_errno()){
            
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
                <script>alert('successfully registered ');</script>
        <?php
        return true;
    }else{
        ?>
        <script>alert('registered fail');</script>
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
                <script>alert('client deleted ');</script>
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

function getSizeOfColumn($query)
{
    $conn = GetConnection();
    $results = mysqli_query($conn,$query);
    $return = mysqli_field_count($results);
    return $return;
}


?>