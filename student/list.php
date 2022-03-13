<?php
include ("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<table, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Address</td>
                <td>District</td>
                <td>Action</td>
</tr>
</thead>
<tbody>
<?php //student's list
$selectQuery="SELECT *FROM student";
$result=mysqli_query($conn,$selectQuery);
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['district'];?></td>
            <td><a href="delete.php?id=<?php echo $row ['id'];?>" onclick="return confirm('Are you sure')";>Delete</a></td>
            <td><a href="edit.php?id=<?php echo $row ['id'];?>">Edit</a></td>    
        </tr>
    <?php
    }
}
?>
</tbody>
</table>
</body>
</html>