
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact us!</title>
  </head>
  <body>
  
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'] ;
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        echo '<script>alert("Your entries are being submitted")</script>';

      $username = "root";
      $password = "12345";
      $database = "contacts";
      $servername = "localhost";
      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      /*if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{
            echo "Connection was successful<br>";
        }*/
        


        // Submit these to a database
        $sql = "INSERT INTO `contactus`( `name`, `email`, `concern`,`dt`) VALUES ('$name','$email','$desc',current_timestamp());";
        $result = mysqli_query($conn,$sql);
        
      /*  if($result){
            echo "The RECORD is inserted  sucessfully";
        }
        else
        {
            echo "The RECORD is not inserted sucessfully because of the error --->".mysqli_error($conn);
        }*/
        
      
    }

    
?>

<div class="container mt-3">
<h1>Enter your details to contact us:</h1>
    <form action="/us_splash/rahul/05_form.php" method="post">
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">.</small>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
       
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

  </body>
</html>

