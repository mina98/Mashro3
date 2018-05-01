<?php 

session_start();
//print_r($_SESSION);
if (@$_SESSION['username'] == null ){
    //include '../controllers/C_Email.php'; 
    echo '

<head>
      
      <link rel="stylesheet" href="../../test-samer/login.css">
  </head>

  <body>
<div class="cotn_principal">
    <nav><h1 class="SCHEZOFERIENIA"   ></nav>
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Welcome,here you can access system and do your jobs.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  ';
   
    if(@$_SESSION['acess']=='f')
    {
        echo'
        <form action=" ../controllers/loginControllers.php" method="post">
  acesscode: <input type="text" name="acesscode" >
    <input type="submit" name="submit"  value="acess"  pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
>
</form>';
    }
    echo'
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>You can register as patient and get advanteges of order medicine.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info" >
       <div class="cont_img_back_grey">
           <img src="../../test-samer/mina.jpg" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
        <img src="../../test-samer/mina.jpg" alt="" />
       </div>
    
    
    
    
    <form class="cont_form_login" action="../../app/controllers/loginControllers.php" method="post">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
   <input type="text" name="username" placeholder="Email"  required="required"/>
 <input  type="password" name="password" placeholder="Password" required="required" />
<input type="submit" class="btn_login" name="submit" value="Login"onclick="cambiar_login()" style="text-align: center;" required="required"/>
  </form >
    
     
  
  
  <form class="cont_form_sign_up" action="../../app/controllers/loginControllers.php" method="post">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
     
     
<input type="text"      name="name" placeholder="Name"required="required" pattern = "/^[a-zA-Z\p{Cyrillic}\s\-]+$/u";
 />
<input type="text"      name="username"  placeholder="User Name"required="required" pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
/>
<input type="password"  min="5" name="password" placeholder="Password" required="required" pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
/>

<input type="text"       name="adress"  placeholder="Your Adress" required="required" pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
/>
<input type="email"       name="email" placeholder="Your Email" required="required" pattern = "/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u";
/>
<input type="submit" class="btn_sign_up" name="submit" value="Register"onclick="cambiar_sign_up()" style="text-align: center;" required="required"/>

  </form>

    </div>
    
  </div>
   
 </div>
    <br>
 
      
      <script src="../../test-samer/login.js"></script>
  </body>
    
        ';
  //include '../controllers/C_Email.php'; 
}
else {
    //echo 'exist session';
    $ty = $_SESSION['type'] ;
   // echo $ty;
    header("location:".$ty."/index.php");
    //die();
}   



?>