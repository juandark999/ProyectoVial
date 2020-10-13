
<br>
<br>
<br>
<div id="login" >
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
           <center><div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        
                        <form id="login-form" class="form" action="<?php echo getUrl("acceso","acceso","postLogin"); ?>" method="post">
                        <br>
                            <h3 class="text-center text-info">Inicio de Sesion</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="nickname" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="clave" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <center><input type="submit" name="submit" class="btn btn-info btn-md" value="CONTINUAR"></center>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="view/registro/registro.php" class="text-info"><center>Registrarce</center></a>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            </center> 
        </div>
    </div>
    