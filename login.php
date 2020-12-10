

<?php include('server.php'); ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
<meta name="viewport" content="width=device-width,initial-scale=1" /><meta name="keywords" content="C#,html5, Ccs3,C,asp.net C#,examen_passageTDI" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="Content/bootstrap.min.css" rel="stylesheet" /><link href="color.css" rel="stylesheet" />
     <style type="text/css">
       @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

body {
    /*background-size: cover;
    background-position: center;
    background-color:aliceblue;*/
}
.form-container{
    background:#a6ada8;
    padding:30px;
    border-radius:30px;
    box-shadow:0px 0px 10px 0px #000;
    position:absolute;
    top:15vh;
}
.bg {
    background-size: 100%;
    background-color:#000; 
    width: 100%;
    height: 100vh;
}
@media only screen and (max-width:678px)
{
    .bg
    {
        background-size:300%;
    }

}
         </style>

</head>
<body>
    <form method="post" action="login.php">
      
    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="form-container">
  <div class="form-group">
     <h1 class="auto-style1"><strong>login</strong></h1> 
    <hr/>
    <?php include('errors.php') ?>
    <hr/>
          <i class="fa fa-envelope" style="font-size:20px;" aria-hidden="true"></i> 
          <input name="username" type="text" id="TextBox1" class="form-control" placeholder="username" style="height:36px;width:242px;" />
      <hr style="border:1px solid #000;" />
  </div>
  <div class="form-group">
    
           <i class="fa fa-key" style="font-size:20px;" aria-hidden="true"></i>
           <input name="password" type="password" id="TextBox2" class="form-control" placeholder="password" style="height:36px;width:242px;" />
  <hr style="border:1px solid #000;"/></div>
  <input type="submit" name="login" value="Connecter"  class="btn btn-primary" style="background-color:#99FF33;width:130px;color: #009900; background-color: #00FFFF; font-weight: bold;" />  
      
             
            <a class="nav-link" href="ModifierPsw.aspx"><i class="fa fa-hand-o-right" style="font-size:17px;color:#8f0058;" aria-hidden="true">Mot de passe oublié??</i></a>
          <a class="nav-link" href="registration.php"> <i class="fa fa-undo" style="font-size:17px;" aria-hidden="true">registration</i></a>
           </div>
                     </div>
           
            </div>
        </div>
    </form>
</body>
</html>