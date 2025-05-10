<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Aparelo | Register</title>
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
  $email = $_POST['email'];
  $repeatpassword = $_POST['repeatpassword'];

  if (empty($login) || empty($password) || empty($email)) {
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
    if ($repeatpassword != $password) {
      echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Passwords do not match!',
          position: 'top-center',
          showConfirmButton: true,
          timer: 30000
        }).then(() => {
          window.location.href = 'sign-up-in-page.php';
        });
    </script>";
    } else {
      $sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$password', '$email')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Registration is successful! ',
              text: 'Please log in to continue.',
              position: 'top-center',
              showConfirmButton: true,
              timer: 30000
            }).then(() => {
              window.location.href = 'sign-up-in-page.php';
            });
            </script>";
      } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'sign-up-in-page.php';
            </script>";
        echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Error!',
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
  }

  ?>
</body>

</html>