<?php
include("./dbconnection.php");
$currentid = $_GET['id'];
echo "this is ".$currentid." current user";
$delete = mysqli_query($con,"delete from users where user_id='$currentid'");
if($delete)
{
    echo "<script>
    alert('deleted Succesfully');
    document.location.href='./data.php';
    </script>";
}else
{
    echo "<script>
    alert('failed');
    </script>
    ";
}
?>