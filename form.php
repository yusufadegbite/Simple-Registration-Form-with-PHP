<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

      <div class="container">
        <h1 class="">
            Registration Form
        </h1>

        <div class="form-div">
            <div class="">
            <form action="user_data.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="date-of-birth">Date of Birth:</label><br>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                <input type="text" name="gender" id="gender" class="form-control">
            </div>
            <div class="form-group">
                <button name="submit" type="submit">Register</button>
            </div>
        </form>
            </div>
        </div>
        
      </div>

       
</body>
</html>