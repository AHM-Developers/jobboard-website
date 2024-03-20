<?php
include("./header.php");
?>
<br><br>
<style>
/* style.css */
.data-tbl {
    width: 100%;
    /* border-collapse: collapse; */

}

.data-tbl th, .data-tbl td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
    transition: .2s ease-in-out;
}

.data-tbl th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold; /* Adjust font weight if needed */
}

.data-tbl tr:hover
{
    cursor: pointer;
    color:black;

}




</style>
<br><br><br><br><br>
<table class="data-tbl">
<thead>
<tr>
    <th>User_id</th>
    <th>User_name</th>
    <th>User_email</th>
    <th>User_password</th>
    <th colspan="2">Actions</th>
</tr>
</thead>

<?php
include("./dbconnection.php");
$fetch = mysqli_query($con,"select * from users");
while($record = mysqli_fetch_array($fetch)) {
?>

<tr>
<td><?php echo $record['user_id']?></td>    
<td><?php echo $record['user_name']?></td>
<td><?php echo $record['user_email']?></td>
<!-- <td class="pass-td">//</td> -->
<td class="password-field"><?php echo htmlspecialchars($record['user_password']); ?></td>

<td><a class="btn btn-primary" href="./update.php?id=<?php echo $record['user_id']?>">Update</a></td>
<td><a class="btn btn-danger" href="./delete.php?id=<?php echo $record['user_id']?>">Delete</a></td>
</tr>

<!-- ?id is variable which is made in url ,, ? is use to make variable in link -->


<?php
}
?>

</table>
<br><br><br><br><br>


<script>
// Define a function called maskPasswords
function maskPasswords() {
    // Select all elements with the class 'password-field' and loop over them
    document.querySelectorAll('.password-field').forEach(function(field) {
        // Get the length of the text content of the current element
        var length = field.textContent.length;
        // Replace the text content of the current element with '*' repeated for the same length as the original text
        field.textContent = '*'.repeat(length);
    });
}

// Call the maskPasswords function directly
maskPasswords();
</script>



<?php 
include('./footer.php');
?>
