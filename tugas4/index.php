<title>Login</title>


 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="plugins/fontawesome-free/fonta/css/all.min.css">
 <!-- icheck bootstrap -->
 <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="dist/css/adminlte.min.css">
 </head>

 <body class="hold-transition login-page">
   <div class="login-box">
     <div class="login-logo">
     </div>
     <!-- /.login-logo -->
     <div class="card">
       <div class="card-body login-card-body">
         <p class="login-box-msg" style="font-weight: bold;">SIGN IN</p>

         <form action="proses.php" method="POST">

           <div class="input-group mb-3">
             <input type="email" id="email" name="email" class="form-control" placeholder="Email">
             <div class="input-group-append">
               <div class="input-group-text">
                 <span class="fas fa-envelope"></span>
               </div>
             </div>
           </div>
           <div class="input-group mb-3">
             <input type="password" id="password" name="password" class="form-control" placeholder="Password">
             <div class="input-group-append">
               <div class="input-group-text">
                 <span class="fas fa-lock"></span>
               </div>
             </div>
           </div>

           <button type="submit" class="btn btn-primary btn-block" style="text-align: center;">Sign In</button>
         </form>
 </body>

 </html>