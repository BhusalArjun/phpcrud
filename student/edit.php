<?php
    include "../config.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM student WHERE id=$id";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);   //fetch single row

    // print_r($row);

    // exit();

?>

    <fieldset>
        <legend><h1>Student form</h1></legend>
        <form action=" " method="POST">

            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td>
                        <input type="text" placeholder="Enter name" name="name" value=<?php echo $row['name']?>>
                    </td>                    
                </tr>
                <tr>
                    <td><label for="Address">Address:</label></td>
                    <td>
                        <input type="text" placeholder="Enter address" name="address" value=<?php echo $row['address']?>>
                    </td>
                </tr>
                <tr>
                    <label for="district">District:</label>
                    <select name="district" >
                        <option value="Kathmandu" <?php if($row['district']=="Kathmandu"){?> Selected <?php } ?> >Kathmandu</option>
                        <option value="Pokhara" <?php if($row['district']=="Pokhara"){?> Selected <?php } ?> >Pokhara</option>
                        <option value="Butwal" <?php if($row['district']=="Butwal"){?> Selected <?php } ?>>Butwal</option>
                     </select>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        <?php

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $district=$_POST['district'];
            $update = "UPDATE student SET name='$name', address='$address',district='$district' WHERE id=$id";

            if(mysqli_query($conn,$update)){
                echo "update succesfully";
            } else {
                echo "unable to update";
            }
        
            header("location:list.php");
        }
        ?>
    </fieldset>