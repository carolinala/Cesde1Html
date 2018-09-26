<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="text-center">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img/image1.png" width="30" height="30" class="" alt="">
                    Tienda Online
                  </a>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light" >    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="registro.php">Registrarse</a>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
                            <button class="btn-registro btn-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section>
            <a href="registro.php">CLICK </a>
            <div class="container "> 
                <div class="registro">
                    <img class="img-responsive logo" src="img/image1.png">
                </div>
                
                <form action="registro.php" class="my-5">
                    <div class="row">
                    <div class="form-group col-6">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group col-6">
                      <label for="apellido">Apellido</label>
                      <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                    </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="Pais">Pais</label>
                            <select class="form-control" id="Pais" name="Pais">
                              <option value="Colombia">Colombia</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="España">España</option>
                              <option value="Pepe">Pepe</option>
                            </select>
                        </div>
                        
                        
                        <div class="form-group col-4">
                            <label for="Departamento">Departamento</label>
                            <select class="form-control" id="Departamento" name="Departamento">
                              <option value="Amazonas">Amazonas</option>
                              <option value="Antioquia">Antioquia</option>
                              <option value="Arauca">Arauca</option>
                              <option value="atlantico">Atlántico</option>
                              <option value="Bolivar">Bolívar</option>
                            </select>
                         </div>
                        
                          <div class="form-group col-4">
                            <label for="Ciudad">Ciudad</label>
                            <select class="form-control" id="Ciudad" name="Ciudad">
                              <option value="Medellin">Medellin</option>
                              <option value="bogota">Bogota</option>
                              <option value="Cali">Cali</option>
                              <option value="Bucaramanga">Bucaramanga</option>
                              <option value="Cartage">Cartagena</option>
                            </select>
                         </div>
                        
                    </div>
                    
                    <div>
                        <div class="row">
                      <div class="form-group col-6">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Nombre" name="Telefono">
                      </div>

                      <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="Email" class="form-control" id="apellido" placeholder="Email" name="Email">
                      </div>
                      </div>
                    </div>
                    
                    
                    
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="terminos">
                      <label class="form-check-label" for="terminos">Acepta Terminos Y Condiciones</label>
                    </div>
                    
                    <small id="nombreHelp" class="form-text text-muted">Sus Datos Nunca Seran Compartidos</small>
                    
                    <button type="submit" class="btn btn-primary pepe">Enviar</button>
                </form>

            </div>
        </section>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
    </body>
</html>
