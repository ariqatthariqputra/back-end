<?php 
include_once('koneksi.php');
$database = new database();
if(isset($_POST['registrasi']))
{
    $login = $_POST['login'];
    $username = password_hash($_POST['username'],PASSWORD_DEFAULT);
    $password = $_POST ['password'];
    $remember = $_POST['remember'];
    $date = $_POST ['date'];
    $gender = $_POST ['gender'];
    $note = $_POST ['note'];
    $comment = $_POST ['comment'];
    if($database->registrasi($login,$username,$password,$remember,$date,$gender,$note,$comment))
    {
      header('location:login.php');
    }
}

$loginErr = $usernameErr = $emailErr = $passwordErr = $rememberErr = $namaErr = $dateErr = $genderErr = $noteErr = $commentErr = "";
$login = $username = $email = $password = $remember = $nama = $date = $gender = $note = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["login"])) {
    $loginErr = "Login tidak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["username"])) {
    $usernameErr = "Username tidak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email tidak boleh kosong";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["password"])) {
    $passwordErr = "Password tidak boleh kosong";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["remember"])) {
    $rememberErr = "Remember tidak boleh kosong";
  } else {
    $remember = test_input($_POST["remember"]);
  }

  if (empty($_POST["nama"])) {
    $namaErr = "Nama tidak boleh kosong";
  } else {
    $nama = test_input($_POST["nama"]);
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date tidak boleh kosong";
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender tidak boleh kosong";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["note"])) {
    $noteErr = "Note tidak boleh kosong";
  } else {
    $note = test_input($_POST["note"]);
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Comment tidak boleh kosong";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Register Form</title>
  </head>
<style>

.error {color: #FF0000;}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>

<body>

  <div>
    <h1 class="mt-5">Pendaftaran</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <p><span class="error">* wajib diisi</span></p>
    <hr/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form">
      <label for="login">Login</label>
      <div>
        <span class="error">* <?php echo $loginErr;?></span>
        <input type="text" class="form-control" id="login" name="login" placeholder="Login">
      </div>
    </div>

    <div class="form">
      <label for="username">Username</label>
      <div>
        <span class="error">* <?php echo $usernameErr;?></span>  
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>

    <div class="form">
    <label for="password">Password</label>
    <span class="error">* <?php echo $passwordErr;?></span>
    <div>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div> 
 
    <div class="form">
      <label for="remember">Remember</label><span class="error">* <?php echo $rememberErr;?></span>
      <div>
        <input type="text" class="form-control" id="remember" name="remember" placeholder="Remember">
      </div>
    </div>
 
    <div class="form">
      <label for="Date">Date</label>
      <span class="error">* <?php echo $dateErr;?></span>
      <div>
        <input type="text" class="form-control" id="date" name="date" placeholder="date">
      </div>
    </div>  

    <div class="form">
      <label for="gender">Gender</label>
      <span class="error">* <?php echo $genderErr;?></span>
      <div>
        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
      </div>
    </div>

    <div class="form">
      <label for="note">Note</label>
      <span class="error">* <?php echo $noteErr;?></span>
      <div>
        <input type="text" class="form-control" id="note" name="note" placeholder="Note">
      </div>
    </div>

    <div class="form">
      <label for="comment">Comment</label>
      <span class="error">* <?php echo $commentErr;?></span>
      <div>
        <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment">
      </div>
    </div>
  
  <div class="form">
  <a href="login.php">Login</a>
  <button type="submit" name="registrasi">Register</button>
  </div>

  
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Ariq At-Thariq Putra @2021</span>
  </div>
</footer>
</body>
</html>