<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SM</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div>
    <?php
    if (isset($_POST['signup'])) {
      echo "HH HH hh";
    } ?>
  </div>
  <div>
    <form action="sign" method="post">

      <div class="container">

        <div class="row">
          <div class="col-sm-3">

            <label for="firstname">First Name</label>
            <input class="form-control" type="text" name="firstname" required />

            <label for="lastname">Last Name</label>
            <input class="form-control" type="text" name="lasttname" required />

            <label for="emailaddress">Email Address</label>
            <input class="form-control" type="email" name="emailaddress" required />

            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" required />

            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" required />
            <hr class="mb-3">
            <input type="submit" name="signup" value="Sign Up" />

          </div>
        </div>

      </div>

    </form>
  </div>
</body>

</html>