<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = mysqli_real_escape_string($conn, $_POST['user']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $data = mysqli_query($conn,"SELECT* FROM login WHERE user='$user' AND pass='$pass' LIMIT 1" );
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $_SESSION['user'] = $user;
            $_SESSION['status'] = "login";
            echo '<script>alert("Login Sukses");window.location="index.php"</script>';
        }else{
            echo '<script>alert("Maaf! data yang anda masukan salah.");history.go(-1);</script>';
        }
	}
    if(isset($_SESSION['status']))
    {header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-purple">

<div class="container">
<br><br><br><br><br><br>

<div class="row justify-content-center">

    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="h4 text-center mb-4"><b>Login Admin</b></h1>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="user" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="pass" placeholder="Password" required>
                    </div>
                    <button class="btn btn-purple form-control-user btn-block"
                    name="proses"  type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</div>
</div> <!-- end container fluid -->
</script>
</body>
</html>