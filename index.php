<?php
session_start();
//session_register("salah");
ini_set('display_errors', 0);
if ($_SESSION["salah"] >= 3){
    echo '<h1>Anda dalam kondisi diblokir</h1>';
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gmail</title>
        <link rel="icon" href="aset/image/Gmail-icon.png">
        <link rel="stylesheet"href="aset/css/bootstrap.css">
        <link rel="stylesheet"href="aset/css/floating-labels.css">
        <link rel="stylesheet" href="aset/css/background.css">
        <script>
            /*
            function hellocoba() {
                // var  email = document.getElementById("email").value;
                // alert("Horreeeee.......: "+email);
                document.getElementById("email").addEventListener("keyup", function (event)(
                        event.preventDefault();
                if (event === 13){
                document.getElementById("passwordd").focus();
                }
                ));
            }
            */
        </script>
        <script>
            /*
            function peringatan() {
                var coba;
                var email = document.getElementById("email").value;
                var pass = document.getElementById("password").value;
                if (email === "dwiki@gmail.com" && pass === "admin") {
                    alert("Congratulations !");
                } else {
                    alert("Email or password incorect !");
                    coba + 1;
                    if (coba >= 3)
                        alert("Sorry, Your account was blocked");
                }
            }
            */
        </script>
    </head>
    <body>
        <form id="frm01" name="frm01" action="login.php" method="POST" class="form-signin">
            <div class="mb-8 modal-lg loginmodal-container">
                        <div class="mb-8 text-center mb-4">
                            <h1>Sign In</h1>
                            <img  class="mb-4" width="110" height="110" src="aset/image/Gmail-icon.png">     
                        </div> 
                        <div class="form-label-group">
                            <input class="form-control" type="email" name="email"id="email" placeholder="email address" 
                                   required="yes" autofocus="yes" autocomplete="no">
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-label-group">
                            <input class="form-control" type="password" name="password" id="password" placeholder="password" 
                                   required="yes"autofocus="yes" autocomplete="no" >
                            <label for="password">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox">Remember Me </input>
                                <a href="#"> lupa password?</a>
                            </label>
                        </div>
                <button  class="btn btn-lg btn-primary btn-block" type="submit">
                            <img class="mb-8" width="27" height="27" src="aset/image/gem.png"> 
                            Sign in </button>
            </div>
        </form>
    </body>
</html>
