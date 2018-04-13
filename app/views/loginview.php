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
     
     
<input type="text"      name="name" placeholder="Name"required="required" />
<input type="text"      name="username"  placeholder="User Name"required="required" />
<input type="password"  name="password" placeholder="Password" required="required"/>
<input type="password" placeholder="Confirm Password" required="required" />
<input type="text"       name="adress"  placeholder="Your Adress" required="required"/>
<input type="email"       name="email" placeholder="Your Email" required="required"/>
<input type="submit" class="btn_sign_up" name="submit" value="Register"onclick="cambiar_sign_up()" style="text-align: center;" required="required"/>

  </form>

    </div>
    
  </div>
   
 </div>
    <br>
 
        <footer class="foot "><div class=left>
            <h1>OUR Product</h1>
            <p>We aim to make a website <br>to hlep patient to make easliy shopping</p>
            <a> <i class="btn-success">facebook</i></a>
            
            </div></footer>
      <script src="../../test-samer/login.js"></script>
  </body>