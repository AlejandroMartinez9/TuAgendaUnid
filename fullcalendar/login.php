<?php session_start(); ?>
<html>
	<head>
		<title>Inicio de sesión</title>
		
        
        <!-- ESTILOS-->
        <link rel="stylesheet" type="text/css" href="css/log.css">
           <link rel="stylesheet" type="text/css" href="css/estilosmenu.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
         
  <!--boton -->
        <style type="text/css">
  .boton{   
    text-decoration: none;
    padding: 10px;
    font-weight: 500;
    font-size: 15px;
    color: black;
    background-color: snow;
    border-radius: 6px;
    border: 1px solid #777;
    position: ;
  }
  .boton:hover{
    color: black;
    background-color: darkgray;
  }
            <!-- -->
</style>
	</head>
	<body>
        <!-- mandamos llamar el menu-->
	<?php include "php/navbar.php"; ?>
        <!-- -->
        
        
    
<!-- contenido de la pagina -->
        <div class="page">
    <div class="container">
    <div class="left">
        
      <div class="login"><img src="https://www.unid.edu.mx/wp-content/uploads/2017/08/logo-unid-17-300x136.png"></div>
      <div class="eula"> INGENIERIA DE SOFTWARE.</div>
    </div>
        
      
    <div class="row">   
<div class="col">
    
     

		<h2>Login</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
    <!--                           -->
            <br>
		  <button type="submit" id="sumbit"class="boton">Ingresar</button>
            

            
		</form>
</div>
</div>
</div>
        </div>
        <!--Pie de pagina -->
        <footer>
    <div  class="container-footer">
            <center>
               <div  class="footer">
                   
                    <div class="row2">
                        
                       <a href="https://www.facebook.com/Red.UNID/"><img src="icon/facebook.png"></a> 
                        
                        <label></label>
                        
                    </div>

                    <div class="row2">
                        <a href="https://autoservicios.banner.unid.mx/UNID/twbkwbis.P_WWWLogin/"><img src="icon/Banner.png"></a>
                        <label>  </label>
                    </div>
                    <div class="row2">
                        <a href="https://twitter.com/RedUNID/"><img src="icon/Twitter.png"></a>
                        <label>  </label>
                    </div>
                    <div class="row2">
                        <a href="https://www.instagram.com/RedUNID/"><img src="icon/Instagram.png"></a>
                        <label>  </label>
                    </div>
                 
                    <div class="row2">
                        <a href="https://www.youtube.com/user/RedUNID"><img src="icon/youtube.png"></a>
                        <label>  </label>
                    </div>


                </div>
</center>
            </div>
        
    </footer>
        <!-- fin de pie de pagina -->
       	<!--SCRIPT DE VALIDACION -->
		<script src="js/valida_login.js"></script>
	</body>
</html>