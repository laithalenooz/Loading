<?php include 'connection.php' ?>
<?php 
        if(isset($_POST['submit'])){
            $fname    = $_POST['fname'];
            $lname    = $_POST['lname'];
            $address  = $_POST['address'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $image    = $_POST['image'];
            

            $fname    = mysqli_real_escape_string($conn, $fname);
            $lname    = mysqli_real_escape_string($conn, $lname);
            $address  = mysqli_real_escape_string($conn, $address);
            $email    = mysqli_real_escape_string($conn, $email);
            $password = mysqli_real_escape_string($conn, $password);


// encryption code
            // $query = "SELECT randSalt FROM users";
            // $select_randSalt_query = mysqli_query($conn, $query);
            // if(!$select_randSalt_query){
            //     die("Query failed" . mysqli_error($conn));
            // }


            // $row = mysqli_fetch_array($select_randSalt_query);

            //     $salt = $row['randSalt'];

            //     $password = crypt($password, $salt);

                $query = "INSERT INTO users(email, password, type, firstname, lastname, address,  photo, created_on) ";
                $query .= "VALUES('{$email}', '{$password}' , 'user', '{$fname}', '{$lname}', '{$address}', '{$image}', NOW())";
                echo "<pre>";
                $register_user_query = mysqli_query($conn, $query);
                if($_POST['password'] !== $_POST['cPassword']){
                    echo "Password does not match!!";die;
                }
                if(!$register_user_query){
                    die("QUERY FAILED" . mysqli_error($conn) . ' ' . mysqli_errno($conn));
                } else {
                    header('location:../login.php');
                }
        }
    ?>