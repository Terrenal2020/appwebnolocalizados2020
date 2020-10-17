@extends('layouts.app')
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<?php

$conexion = mysqli_connect("localhost", "root", "12345678", "appwebnolocalizados");

if (!$conexion) {
    echo 'Error';
} else{
    echo 'Conectado';
}

?>
<meta charset=utf-8" />

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <img src = "{{url ('/img/logo.png')}}" alt = "Imagen" width="150" height="100" />




                    </div>
                </div>
            </div>

        </div>
        <form  method="POST" name="form-work" action="BaseDatos/guardar.php">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre(s)</label>
                <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo:Juan">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido Paterno</label>
                <input type="apellidoP" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo:Lopez">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido Materno</label>
                <input type="apellidoM" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo:Lopez">
            </div>
                </form>
                    <label for="exampleFormControlInput1">Sexo</label>

                    <select>
                        <option value="0">Seleccione:</option>
                    <?php


                    $sql = "SELECT id,sexo FROM cat_sexos";
                    $result = $conexion->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = mysqli_fetch_assoc($result))  {

                            echo '<option value=>'.$row["sexo"].'</option>';
                        }
                    } else {
                        echo "0 results";
                    }


                    ?>
                    </select>


                    <label for="exampleFormControlInput1">Nacionalidad</label>

                    <select>
                        <option value="0">Seleccione:</option>
                        <?php


                        $sql = "SELECT id,nacionalidad FROM cat_nacionalidad";
                        $result = $conexion->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = mysqli_fetch_assoc($result))  {

                                echo '<option value=>'.$row["nacionalidad"].'</option>';
                            }
                        } else {
                            echo "0 results";
                        }



                        ?>
                    </select>



                    <div class="form-group">
            <label for="exampleFormControlInput1">Curp</label>
            <input type="curp" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">RFC</label>
            <input type="rfc" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Estado civil</label>


            <select>
                <option value="0">Seleccione:</option>
                <?php


                $sql = "SELECT id,edoCivil FROM cat_edo_civil";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_assoc($result))  {

                        echo '<option value=>'.$row["edoCivil"].'</option>';
                    }
                } else {
                    echo "0 results";
                }

                $conexion->close();

                ?>
            </select>
        </div>
            <!-- Campo de entrada de fecha -->
            Selecciona la fecha deseada:
            <input type="date" name="fecha" min="2018-03-25" max="2018-05-25" />

        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="edad" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Escolaridad</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
            </select>
        </div>
                </div>
            </div>

        </div>

        </form>



    </nav>



@endsection
