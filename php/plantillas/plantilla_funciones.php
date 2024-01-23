<?php
function habitacion_doble_mostrar($tipo_habitacion, $check_in, $check_out)
{
            echo '<div class="card">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Habitacion Doble</h5>';
                    echo '<img src="img/';
                    echo $tipo_habitacion;
                    echo '.jpg"width="200">';
                    echo '<p class="card-text">Fecha de ingreso:';
                    echo $check_in;
                    echo '</p>';
                    echo '<p class="card-text">Fecha de salida:';
                    echo $check_out;
                    echo '</p>';
                    echo '<p class="card-text">Precio: $17.000</p>';
                echo '</div>';
            echo '</div>';
}
function habitacion_simple_mostrar($tipo_habitacion, $check_in, $check_out)
{
            echo '<div class="card">';
                echo '<div class="card-body">';
                    echo '<h5 class="card-title">Habitacion Simple</h5>';
                    echo '<img src="img/';
                    echo $tipo_habitacion;
                    echo '.jpg"width="200">';
                    echo '<p class="card-text">Fecha de ingreso:';
                    echo $check_in;
                    echo '</p>';
                    echo '<p class="card-text">Fecha de salida:';
                    echo $check_out;
                    echo '</p>';
                    echo '<p class="card-text">Precio:$15.000</p>';
                echo '</div>';
            echo '</div>';
}



     
                
                
          