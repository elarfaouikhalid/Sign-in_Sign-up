

<?php include('server.php'); ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width,initial-scale=1" /><meta name="keywords" content="C#,html5, Ccs3,C,asp.net C#,examen_passageTDI" /><link href="font1.css" rel="stylesheet" /><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="Content/bootstrap.min.css" rel="stylesheet" /><title>

</title>
    <style type="text/css">
        .auto-style1 {
            color: #FF0000;
        }
        .auto-style2 {
            color: #FF0000;
            background-color: #FFFF66;
        }
        .auto-style3 {
            color: #FF0000;
            background-color: #66FFFF;
        }
        .auto-style4 {
            color: #FF3300;
        }
        body {
}
 a:hover
           {
               color:#ff2f00;
           }   
     a:hover
           {
               color:#ff2f00;
           }
     .cl
     {
         
     }
      /*.cl1 input[type=submit]
        {
         color:red;
            margin-left:4px;
            color:#ff7d03;
            text-align:center;
            font-size:22px;
            border-radius:4px;
            text-decoration:underline;
        }*/
     .container-fluid .col-md-4
{
   margin:12px;
   padding:20px;
   background-color:#fff;
   margin-bottom:2px;
   text-align:left;
}
     .col-lg-4 a:hover{
         color:#ff0000;
     }
          .col-lg-4
     {
          border-radius:18px;
   
    background-color:#fff;
    line-height:20px;
    top:3vh;
    background:#a6ada8;
    padding:10px;
     }
           .col-lg-4 header
          {
               background-color:#6e706f;
               color:#8ad49f;
border-radius:18px;
    box-shadow:2222px 0px 0px 33px #000;
          }
          container{
    height: 570px;
    left: 50%;
    box-sizing: border-box;
    transform: translate(-50%,-50%);
    position: fixed;
    background-color:#fff;
    background-image: url('scripts/cofee.jpg');
    line-height:60px;
}
        </style>
    </head>
<body>
    
    <form method="post" action="registration.php" >
        
      <div class="container-fluid" style="text-align:center;">
          <div class="row justify-content-center">
       <div class="col-lg-4">
           <header style="height:33px;"><h4>Registration</h4></header>
           <?php include('errors.php') ?>
           <hr style="border:2px solid red"/>
           <strong>
          <input name="username" type="text" maxlength="10"  class="form-control" placeholder="username" />
          <br/>
           
          <input name="email" type="text" id="Textemail" class="form-control" placeholder="Enter Email" />
           
           <br />
          <input name="password" type="password" id="TextPsw" class="form-control" placeholder="Password" />
           
           <br />
           
          <input name="password2" type="password" id="Textphone" class="form-control" placeholder="confirm Password" />
               <br />
           <hr style="border:2px solid"/>
               <!-- <span class="form-check"><input id="CheckBox1" type="checkbox" name="CheckBox1" /><label for="CheckBox1">j'accepte les Conditions.</label></span>
           <hr style="border:2px solid"/> -->
          
          </strong>
          <input type="submit" name="register" value="Confirmer" class="btn btn-success" style="width:169px;" />  
          <a class="nav-link" href="login.php"><strong>login </strong> </a>
          </strong>
      </div>
            </div>
          </div>
        &nbsp;</form>
</body>
</html>


