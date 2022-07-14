<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | QX Attendance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon"  href="{{asset('binary/images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('binary/css/style-login.css')}}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style type="text/css">
        @import url("https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>
</head>
<body>
    <link rel="stylesheet" type="text/css">
    <div class="container center">
        <div class="header center rounded">
            <div class="top center">
                <img src="{{asset('binary/images/logo.png')}}">
                <span class="login head">Attendance System</span>
            </div>
              <p class="text-center">Login your account</p>
        </div>
              <form action="/login" method="POST">
                @csrf
                 <div class="form-group input-group">
                      <!-- email -->
                    <div class="input-group-prepend">
                       <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input name="user_email" class="form-control" placeholder="Email Address" type="email">
                 </div>
                    
                 <div class="form-group input-group">
                      <!-- password -->
                    <div class="input-group-prepend">
                       <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    </div>
                    <input name="user_password" class="form-control" placeholder="Password" type="password">
                 </div>

                 <!--remember me-->
                 <div class="form-check">
                    <input class="form-check-input align-middle" type="checkbox" value="" id="checkbox" />
                    <label class="form-check-label fs-6" for="checkbox">Keep me signed in</label>
                <!--forgot password-->
                    <a href="#!" class="float-right fs-6">Forgot password?</a>
                  </div>
                 <div class="form-group text-center mt-5">
                    <a class="px-5 py-2 buttonprof red" href="#">Sign In</a>
                 </div>
              </form>
        </div>
     </div>
</body>
</html>