<?php 
    $title = "This record is deleted";
    require_once './includes/header.php';
    require_once './db/conn.php';     	

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $deleteid=  $_POST['del_key'];
    
    $sql = "DELETE FROM Client_info WHERE `Client_info`.`client_id` = $deleteid";

    if (mysqli_query($conn, $sql)) {
        echo "Deleted!";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
       

}
    
?>

<?php 
    require_once './includes/footer.php';
 ?>