    //VARIABLES NECESARIAS
    var fechaInicio; //CHECK-IN
    var fechaFin; //CHECK-OUT

    //EJECUTA FUNCION QUE RECIBE DOS PARAMETROS (fechaInicio, fechaFin)
    //SE EJECUTA MEDIANTE INPUT TIPO DATE --> DATERANGEPICKER
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        fechaInicio = start.format('YYYY-MM-DD');
        fechaFin = end.format('YYYY-MM-DD');
          $.ajax({
          url:"modulos/verificar_reserva.php?fechaInicio=" + fechaInicio + "&" + "fechaFin=" + fechaFin,
          type: "GET",
          dataType:'text',
          data:{data: 'verificar_reservas'},
          success:function(data){
          //El RESULTADO DE LA PETICION SE MUESTRA EN EL DOOM
             var resultado = document.getElementById('resultado'); 
             resultado.innerHTML = data;
            }
          });
        });
     });
    
    //EN LA FUNCION VERIFICAR_RESERVA() BRINDA LA OPCION DE CREAR UNA RESERVA SI NO EXISTE CON ESAS FECHAS
    //EJECUTA LA FUNCION QUE GUARDA LA RESERVA MEDIANTE UNA PETICION AJAX ENVIANDO LOS PARAMETROS CORRESPONDIENTES
    function guardar_reserva(tipo_habitacion) {
      $.ajax({
          url:"modulos/guardar_reserva.php?fechaInicio=" + fechaInicio + "&" + "fechaFin=" + fechaFin + "&" + "habitacion=" + tipo_habitacion,
          type: "GET",
          dataType:'text',
          data:{data: 'guardar_reservas'},
          success:function(data){
             window.location.reload();
        }
       });
    }

    //EJECUTA LA FUNCION QUE MUESTRA EL APARTADO DONDE SE VERIFICA Y AGREGA UNA RESERVA NUEVA
    function agregar_reservas() {
        var agregar_reservas = document.getElementById('agregar_reservas');
        var reservas_actuales = document.getElementById('reservas_actuales');
        reservas_actuales.style.display = "none";
        agregar_reservas.style.display = "";     
      }

    //EJECUTA LA FUNCION QUE MUESTRA LAS RESERVAS YA REALIZADAS
    function reservas_actuales() {
        var agregar_reservas = document.getElementById('agregar_reservas');
        var reservas_actuales = document.getElementById('reservas_actuales');
        agregar_reservas.style.display = "none";
        reservas_actuales.style.display = "";
        $.ajax({
          url:"modulos/mostrar_reservas.php",
          type: "GET",
          dataType:'text',
          data:{data: 'mostrar_reservas'},
          success:function(data){
             var mostrar_reservas = document.getElementById('mostrar_reservas'); 
             mostrar_reservas.innerHTML = data;
          }
        });
    }

    //EJECUTA LA PRESENTACION DEL SISTEMA
    function carga(){
        setTimeout(function(){
            document.body.style.backgroundColor = "" + "white";
            var logo_inicio = document.getElementById("logo_inicio");
            var sec_uno = document.getElementById("titulo_principal");
            var sec_dos = document.getElementById("btn_secciones");
            logo_inicio.style.display = "none";
            sec_uno.style.display = "";
            sec_dos.style.display = "";            
            reservas_actuales();

        }, 2500);
   }