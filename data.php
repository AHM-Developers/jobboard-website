<?php
include("./header.php");
?>
<br><br>
<style>
/* style.css */
.data-tbl {
    width: 100%;
    border-collapse: collapse;
}

.data-tbl th, .data-tbl td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.data-tbl th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold; /* Adjust font weight if needed */
}
</style>
<table class="data-tbl">
<thead>
<tr>
    <th>User_name</th>
    <th>User_email</th>
    <th>User_password</th>
</tr>
</thead>

<?php
include("./dbconnection.php");
$fetch = mysqli_query($con,"select * from users");
while($record = mysqli_fetch_array($fetch)) {
?>

<tr>
<td><?php echo $record['user_name']?></td>
<td><?php echo $record['user_email']?></td>
<td><?php echo $record['user_password']?></td>
</tr>

<?php
}
?>
</table>


<?php 
include('./footer.php');
?>
