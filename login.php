<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Aparelo | Login</title>
  <style>
    body {
      background: rgb(241, 85, 37);
      background: linear-gradient(145deg, rgba(241, 85, 37, 1) 39%, rgba(253, 187, 45, 1) 100%);
    }
  </style>
</head>

<body>
  <?php
  require_once('db.php');

  $login = $_POST['login'];
  $password = $_POST['password'];

  if (empty($login) || empty($password)) {
    echo "<script>
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Fill in all fields!',
                  position: 'top-center',
                  showConfirmButton: true,
                  timer: 30000
                }).then(() => {
                  window.location.href = 'sign-up-in-page.php';
                });
            </script>";
  } else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<script>
                    Swal.fire({
                      icon: 'success',
                      title: 'Sign in is successful!',
                      text: 'Welcome $login!',
                      position: 'top-center',
                      showConfirmButton: true,
                      timer: 30000
                    }).then(() => {
                      window.location.href = 'indexAfterSignIn.php';
                    });
                  </script>";
      }
    } else {
      echo "<script>
                    Swal.fire({
                      icon: 'error',
                      title: 'No such user!',
                      text: '" . $conn->error . "',
                      position: 'top-center',
                      showConfirmButton: true,
                      timer: 30000
                    }).then(() => {
                      window.location.href = 'sign-up-in-page.php';
                    });
                </script>";
    }
  }

  ?>
</body>

</html>