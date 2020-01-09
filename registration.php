<?php
require_once('connection.php');
?>
<!doctype html>
<html>
  <head>
      <title>Shape registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="registrationCSS.css">
  </head>
  <style>
    a:link {
      color: white;
    }

    /* visited link */
    a:visited {
      color: white;

    }
    a{
      font-size:1.4em;
    }

    /* mouse over link */
    a:hover {
      color: rgba(203,20,11,0.8);
      text-decoration:none;
    }

    /* selected link */
    a:active {
      color: white;
    }
  </style>
<body>
    <div>
      <?php

      ?>

    </div>
  <div>
    <form action="registration.php" method="post">
        <div class="container">
          <div class="space"><a href="index.php">Back</a><h1 class="heading">Welcome to Shape registration.</h1></div>

          <div class="row">
            <div class="col-md-4 offset-4">
                    <h1>Sign up for Shape</h1>
                    <p>Fill up the form in order to sign up for Shape.</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>
                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" id="lastname" type="text" name="lastname" required>
                    <label for="email"><b>Email adress</b></label>
                    <input class="form-control" id="email" type="email" name="email" required>
                    <label for="Phone number"><b>Phone number</b></label>
                    <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>
                    <label for="password"><b>Password</b></label>
                    <input class="form-control" id="password" type="password" name="password" required>
                    <hr class="mb-3">
                    <input class="btn btn-danger" type="submit" id="register" name="create" value="Sign Up">
            </div>
          </div>
        </div>
    </form>
  </div>
    <script type="text/javascript" src="js/vendor/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
      $(function(){
        $('#register').click(function(e){
          var valid = this.form.checkValidity();
          if(valid){
            var firstname 	= $('#firstname').val();
            var lastname	= $('#lastname').val();
            var email 		= $('#email').val();
            var phonenumber = $('#phonenumber').val();
            var password 	= $('#password').val();

            e.preventDefault();
            $.ajax({
              type: 'POST',
              url: 'process.php',
              data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
              success: function(data){
                Swal.fire({
                  'title': 'Successful',
                  'text': data,
                  'type': 'success'
                })

              },
              error: function(data){
                Swal.fire({
                  'title': 'Errors',
                  'text': 'There were errors while saving the data.',
                  'type': 'error'
                })
              }
            });

          }else{

          }

        });

      });
    </script>
</body>
</html>
