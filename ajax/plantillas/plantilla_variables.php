<?php
$alerta = '<div class="alert alert-success py-4" role="alert">
                 No existe habitaciones disponibles para esa fecha..
                </div>';


$habitacionDoble = '<div class="col-md text-center content" style="">
                <img src="img/habitacion_doble.jpg" width="300">
                <br><br>
                <h2>Habitación Doble</h2>
                <hr>
                <div class="row text-start text-habitaciones py-3" >
                  
                  <div class="col-12">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><h3>Camas:</h3><p>Cama doble</p></li>
                      <li class="list-group-item"><h3>Ocupación:</h3><p>2 personas</p></li>
                      <li class="list-group-item"><h3>Vistas:</h3><p>Patio</p></li>
                      <li class="list-group-item"><h3>Precio:</h3><p>$17.000</p></li>
                    </ul>
                  </div>
                  <div class="col-12 text-center">
                    <button class="btn btn-outline-dark " onclick="guardar_reserva(`habitacion_doble`)">Elegir habitación</button>
                    <hr>
                  </div>
                </div>
              </div>';

$habitacionSimple = '
          <div class="col-md text-center content mb-3" style="">
            <img src="img/habitacion_simple.jpg" width="300">
            <br><br>
            <h2>Habitación Simple</h2>
            <hr>
            <div class="row text-start text-habitaciones py-3" >
              
              <div class="col-12">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><h3>Camas:</h3><p>Cama doble</p></li>
                  <li class="list-group-item"><h3>Ocupación:</h3><p>2 personas</p></li>
                  <li class="list-group-item"><h3>Vistas:</h3><p>Patio</p></li>
                  <li class="list-group-item"><h3>Precio:</h3><p>$15.000</p></li>
                </ul>
              </div>
              <div class="col-12 text-center">
                <button class="btn btn-outline-dark " onclick="guardar_reserva(`habitacion_simple`) ">Elegir habitación</button>
                <hr>
              </div>
            </div>
          </div>
          ';              
$habitacionSimpleUno = '
          <div class="col-md text-center content mb-3" style="">
            <img src="img/habitacion_simple.jpg" width="300">
            <br><br>
            <h2>Habitación Simple</h2>
            <hr>
            <div class="row text-start text-habitaciones py-3" >
              
              <div class="col-12">
                <ul class="list-group list-group-flush">
                  
          '; 

$habitacionSimpleDos = '
                </ul>
              </div>
                <hr>
            </div>
          </div>
          ';            

$habitacionDobleUno = '
          <div class="col-md text-center content mb-3" style="">
            <img src="img/habitacion_doble.jpg" width="300">
            <br><br>
            <h2>Habitación Doble</h2>
            <hr>
            <div class="row text-start text-habitaciones py-3" >
              
              <div class="col-12">
                <ul class="list-group list-group-flush">
                  
          '; 

$habitacionDobleDos = '
                </ul>
              </div>
                <hr>
            </div>
          </div>
          ';            
