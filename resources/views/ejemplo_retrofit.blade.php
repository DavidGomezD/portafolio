@extends('plantilla') <!--Extiende de plantilla.blade.php-->

@section('contenido')<!--Indica la seccion del contenido-->
<!--Inicio del contenido-->
        <div class="row">
            <div class="col">
                <h3>Ejemplo retrofit</h3>
                <br>
                <p>
                    La aplicación muestra los datos en un scroll view tomados desde una api.     
                </p>
                <a href="https://login.gomezdelgado.com/api/rest.php">
                    Api de la cual toma los datos la app. 
                </a>
                <br>
                <a href="https://github.com/DavidGomezD/ejemplo-retrofit/tree/main/app/src/main/java/com/davidgd/ejemploretrofit">
                    Código Java.
                </a>
                <br>
                <a href="https://github.com/DavidGomezD/ejemplo-retrofit/tree/main/app/src/main/res/layout">
                    Código de la interfaz. 
                </a>
                <br>
                <a href="pdf/Uso de Retrofit.pdf">
                    Documentación de la aplicación en pdf.
                </a>
            </div>
            <div class="col text-center">
                <img src="img/captura1.jpg" class="img-fluid" width="250">
            </div>
        </div>

<!--Fin del contenido-->
@endsection