<?php
$err="";
$success="";
if (isset($_POST["submit"])){
    if (empty($_POST["email"])){
        $err .= "Email is Required<br />";
    }
    if (empty($_POST["password"])){
        $err .= "Password is Required";
    }
    if ($_POST["email"] !== "admin@admin.com" || $_POST["password"] !== "password"){
        $err .= "Wrong email or password";
    }
    if ($_POST["email"] == "admin@admin.com" || $_POST["password"] == "password"){
        $success .= "Successfully Login";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Activity 6 of Kareen Collamat</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="main-content">   
            <div class="form-container">
                <?php if(!empty($err)):?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $err; ?>
                  </div>
                <?php endif; ?>
                <?php if(!empty($success)):?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                  </div>
                <?php endif; ?>                    
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="formclass">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" value="<?php if(!empty($_POST["email"])) echo $_POST["email"]; ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" value="<?php if(!empty($_POST["password"])) echo $_POST["password"]; ?>" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                    <input name="checkbox"  type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input name="submit" type="submit" value="Login" class="btn btn-primary"/>
                </form>
            </div>
        </div>
        <script>

        </script>
    </body>
</html>