<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="Images/menu.png" class="menu-icono" alt="menu">
            </label>
              <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
              </nav>


        </div>

       <div class="header-content container">
              <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente ipsum facere pariatur, accusamus quaerat cum omnis a labore! Voluptate nemo suscipit est obcaecati repellat esse amet qui voluptatem, minima ullam!
                </p>
                <a href="#" class="btn-1">Informacion</a>
              </div>       
              <div class="header-img">
                <img src="Images/left.png" alt="">
              </div>
        
       </div>



    </header>


    <section class="about container">
        <div class="about-img">
            <img src="Images/about.png">
        </div>

        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quidem voluptates dolores? Suscipit doloremque architecto aliquam amet adipisci eaque minus accusantium aut dolor sint cum asperiores nisi aperiam, ipsam corporis?</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo perspiciatis magni nobis dolorem facilis recusandae beatae alias, nulla fugit dolorum quaerat, consequatur iure fuga? Fuga quis deleniti ex? Quas, harum.</p>
        </div>

    </section>

       <main class="servicios">
           
             <h2>Servicios</h2>
                   <div class="servicios-content container">

                               <div class="servicio-1">
                                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                                <h3>Pediatria</h3>
                               </div>

                               <div class="servicio-1">
                                <i class=" fa-solid fa-bed-pulse"></i>
                                <h3>Dermatologia</h3>
                               </div>

                               <div class="servicio-1">
                                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                                <h3>Ginecologia</h3>
                               </div>
                                
                               <div class="servicio-1">
                                <i class="fa-solid fa-hospital"></i>
                                <h3>Cardiologia</h3>
                               </div>




                   </div>
            



       </main>



       <section class="formulario container">

           <form method="post" autocomplete="off">
                         <h2>Agenda Consulta</h2>

                         <div class="input-group">

                                  <div class="input container">
                                         <input type="text" name="NAME" placeholder="Nombre Y Apellido">
                                         <i class="fa-solid fa-user">
                                         
                                         </i>


                                  </div>

                                  <div class="input container">
                                    <input type="tel" name="phone" placeholder="Telefono Celular">
                                    <i class="fa-solid fa-phone">
                                    </i>
                             </div>


                             <div class="input container">
                                <input type="email" name="email" placeholder="Correo">
                                <i class="fa-solid fa-envelope">
                                </i>
                         </div>

                         <div class="input container">
                           <textarea name="message" placeholder="Detalles de la consulta" ></textarea>
                         </div>

                          <input type="submit" name="send" class="btn" onclick="myFunction()">

                        
                        
                        
                        
                        
                        
                        
                            </div>



           </form>



       </section>

       <footer class="footer">
               <div class="footer-content container">
                                  <div class="link">
                                      <a href="#" class="logo">logo</a>
                                  </div>
                                  
                                  <div class="link">
                                   <ul>
                                         <li><a href="#">Inicio</a></li>
                                         <li><a href="#">Nosotros</a></li>
                                         <li><a href="#">Servicios</a></li>
                                         <li><a href="#">Contacto</a></li>




                                   </ul>

                                  </div>
                                    
                                  
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                </div>                
               
       </footer>

       <?php
        include("send.sql"); 
        ?> 
       

       <script>
        function myFunction() {
            window.location.href="http://localhost/formularios"
        }
       </script>
   
       
</body>
</html>