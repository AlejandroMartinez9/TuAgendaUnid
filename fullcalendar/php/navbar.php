	<!-- MENU CON CONEXION AL REGISTRO. LOGIN. LOGOUT.-->

    <ul class="menu" >
      <?php if(!isset($_SESSION["user_id"])):?>
      <li><a href="./registro.php" target=”_blank”>REGISTRO</a></li>
      <li><a href="./login.php" target=”_blank”>LOGIN</a></li>
    <?php else:?>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>


