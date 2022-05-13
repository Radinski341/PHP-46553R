<?php include "header.php" ?>

<?php
    $all_data_query = "SELECT * FROM data";
    $all_data = mysqli_query($connection, $all_data_query);
  
    ?>
    <table>
        <tr>
            <th>EGN</th>
            <th>Three names</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Income</th>
            <th>Social help</th>
        </tr>
    <?php
    while($row = mysqli_fetch_assoc($all_data)){
        ?>
        <tr>
            <td><?php echo $row['EGN']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['age']?></td>
            <td><?php echo $row['income_value']?></td>
            <td><?php if($row['social_help'] == 0){echo "No";}else{echo "Yes";} ?></td>
        </tr>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
        
    
?>
<div class="buttons">
    <a href="add.php">Add in database</a>
    <a href="display-social.php">Social help data</a>
</div>


<?php include "footer.php"?>