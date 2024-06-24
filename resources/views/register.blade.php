<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
  body {
    position: relative;
    background-image: url('{{ asset('sma.png') }}'); /* Ganti dengan URL gambar latar belakang yang diinginkan */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; /* Menghentikan pengulangan gambar */
    display: flex;
    justify-content: flex-end; /* Memindahkan card ke sisi kanan */
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .login-container {
    width: 320px;
    margin-right: 200px; /* Menambahkan jarak yang lebih besar dari tepi kanan */
    margin-left: 50px; /* Menambahkan jarak dari tepi kiri */
}

  .card {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
  }

  .card-content {
    text-align: center;
  }

  h2 {
    color: #333333;
  }

  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }

  label {
    display: block;
    margin-bottom: 5px;
    color: #666666;
  }

  input[type="text"],
  input[type="password"] {
    width: calc(100% - 10px);
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .toggle-password {
    float: right;
    color: #666666;
    cursor: pointer;
  }

  button {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #0056b3;
  }

  .additional-options {
    margin-top: 20px;
  }

  .additional-options a {
    color: #007bff;
    text-decoration: none;
  }

  .additional-options span {
    margin: 0 10px;
    color: #666666;
  }
  
</style>
</head>
<body>

<div class="login-container">
  <div class="card">
    <div class="card-content">
      <h2>Register</h2>
      <form action="{{route('prosesRegister')}}" method="POST">
      @csrf
      <!-- <div id="alert" class="alert alert-danger alert-dismissible fade show d-none" role="alert">Password does not match -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button> -->
         </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <span class="toggle-password" onclick="togglePassword()">Show</span>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
      </form>
      <div class="additional-options">
        <span>Already have an account? </span><a href="{{route('login')}}">Log In</a>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePassword() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      document.querySelector(".toggle-password").textContent = "Hide";
    } else {
      passwordInput.type = "password";
      document.querySelector(".toggle-password").textContent = "Show";
    }
  }
</script>

</body>
</html>
