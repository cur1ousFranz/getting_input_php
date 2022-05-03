<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Getting Input</title>
</head>
<body>

    <div class="container w-50 mt-5">
        <form action="getinput.php" class="form-control" method="get">
            <h1 class="text-center">Sign in</h1>

           <!-- Username Field -->
            <div class="form-floating mt-5">
             <input type="text" class="form-control" placeholder="Username" name="username" id="userName">
             <label for="#userName">Username</label>
            </div>
            
            <!-- Password Field -->
            <div class="form-floating mt-3">
                <input type="password" class="form-control" placeholder="Password" name="password" id="passWord">
                <label for="passWord">Password</label>
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary btn-lg form-control mt-3 mb-5" type="submit">Submit</button>

        </form>
    </div>

    <?php 
        $username = $_GET["username"];
        $password = $_GET["password"];

        echo "Your username is: $username";
        echo "<br>";
        echo "Your password is: $password";
    ?>

</body>
</html>