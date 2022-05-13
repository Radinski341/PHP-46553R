<?php include "header.php" ?>
<form action="" method="post">
    <div class="form-section">
        <label for="egn">EGN</label>
        <input type="number" name="egn" id="egn">
    </div>
    <div class="form-section">
        <label for="full-name">Three names</label>
        <input type="text" name="full-name" id="full-name">
    </div>
    <div class="form-section">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="Male">
    </div>
    <div class="form-section">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="Female">
    </div>
    <div class="form-section">
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>
    <div class="form-section">
        <label for="income">Income</label>
        <input type="number" name="income" id="income">
    </div>
    <div class="form-section">
        <label for="social-help">Social help?</label>
        <input type="checkbox" name="social-help" id="social-help">
    </div>
    <input type="submit" name="add-person">
</form>
<div class="buttons">
    <a href="display.php">Display database</a>
    <a href="display-social.php">Social help data</a>
</div>

<?php 
    include "footer.php";
    
    if(isset($_POST['add-person'])){
        $egn = $_POST['egn'];
        $full_name = $_POST['full-name'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : false;
        $age = $_POST['age'];
        $income = $_POST['income'];
        $social_help = isset($_POST["social-help"]) ? 1 : 0;
        if($egn > 999999999){
      
            if($gender){
               
                if($full_name != ""){
                
                    if($age != ""){
                       
                        $query = "INSERT INTO data(EGN, full_name, gender, age, income_value, social_help) VALUE ('{$egn}', '{$full_name}', '{$gender}', '{$age}', '{$income}', '{$social_help}')";

                        $add_person_query = mysqli_query($connection, $query);
                        if(!$add_person_query){
                            die("Query filed" . mysqli_error($connection));
                        }
                    }else{
                        echo "<div class='alert'>Please enter valid age</div>";
                    }
                }else{
                    echo "<div class='alert'>Please enter a full name</div>";
                }
            }else{
                echo "<div class='alert'>Please select gender</div>";
            }
        }else{
            echo "<div class='alert'>Please enter a valid EGN of 10 digits</div>";
        }
        
    }
?>
