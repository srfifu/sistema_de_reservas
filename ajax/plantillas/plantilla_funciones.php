<?php
function habitacion_doble_mostrar($tipo_habitacion, $check_in, $check_out)
{
                echo '<div class="col-md mb-2 p-3" style="border-radius: 10px; ">';
                echo "<div class='content text-center'>";
                echo "<h2>";
                echo "Habitacion Doble";
                echo"</h2>";
                echo "<div class='py-2'>";
                echo "<img src='img/";
                echo $tipo_habitacion;
                echo ".jpg' width='200'> ";
                echo"</div>";
                echo"<br>";
                
                echo "<p>Fecha de ingreso: ";
                echo $check_in;
                echo "<p>Fecha de salida: ";
                echo $check_out;
                echo '<p>Precio: $17.000</p>';
                echo "</div>";
                echo"</div>";
}
function habitacion_simple_mostrar($tipo_habitacion, $check_in, $check_out)
{
                echo '<div class="col-md mb-2 p-3" style="border-radius: 10px; ">';
                echo "<div class='content text-center'>";
                echo "<h2>";
                echo "Habitacion Simple";
                echo"</h2>";
                echo "<div class='py-2'>";
                echo "<img src='img/";
                echo $tipo_habitacion;
                echo ".jpg' width='200'> ";
                echo"</div>";
                echo"<br>";
                
                echo "<p>Fecha de ingreso: ";
                echo $check_in;
                echo "<p>Fecha de salida: ";
                echo $check_out;
                echo '<p>Precio: $15.000</p>';
                echo "</div>";
                echo"</div>";
}



     
                
                
          