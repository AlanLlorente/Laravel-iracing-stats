<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>iracing-stats</title>
</head>
<body>
<div class="text-center mt-2">
    <h3>iracing-stats</h3>

    @if(isset($message))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    @endif

        <form class="row g-3 container" method="post" action="/save">
        @csrf
        <!--Columna de coche/circuito -->
            <div class="col-md-6">
                <label for="car" class="form-label">Car</label>
                <input type="text" class="form-control" id="car" name="car">
            </div>
            <div class="col-md-6">
                <label for="circuit" class="form-label">Circuit</label>
                <input type="text" class="form-control" id="circuit" name="circuit">
            </div>

            <!--Columna de series/terminar carrera -->
            <div class="col-md-8">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="col-md-4">
                <label for="endrace" class="form-label">Did you end the race?</label>
                <select class="form-select" aria-label="Default select example" id="endrace" name="DNF">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <!--Columna de incidentes / x4's -->
            <div class="col-md-4">
                <label for="incidents" class="form-label">Incidents</label>
                <input type="number" class="form-control" id="incidents" name="incidents">
            </div>
            <div class="col-md-4">
                <label for="get4x" class="form-label">Did you get a 4x?</label>
                <select class="form-select" aria-label="Default select example" id="endrace" name="4xtome">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="give4x" class="form-label">Did you give a 4x?</label>
                <select class="form-select" aria-label="Default select example" id="endrace" name="x4toothers">
                    <option value="true" selected>Yes</option>
                    <option value="false">No</option>
                </select>
            </div>

            <!--Columna de vueltas/start pos y finish pos / did you do qualy? -->
            <div class="col-md-3">
                <label for="racelaps" class="form-label">Race laps</label>
                <input type="number" class="form-control" id="racelaps" name="laps">
            </div>
            <div class="col-md-3">
                <label for="startpos" class="form-label">Start position</label>
                <input type="number" class="form-control" id="startpos" name="start_position">
            </div>
            <div class="col-md-3">
                <label for="finishpos" class="form-label">Finish position</label>
                <input type="number" class="form-control" id="finishpos" name="finish_position">
            </div>
            <div class="col-md-3">
                <label for="didqualy" class="form-label">Did you do qualy?</label>
                <select class="form-select" aria-label="Default select example" id="didqualy" name="didqualy">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <!--Columna de irating / sr / SOF-->
            <div class="col-md-4">
                <label for="ir" class="form-label">iRating gained/losed</label>
                <input type="text" class="form-control" id="ir" name="irating">
            </div>
            <div class="col-md-4">
                <label for="sr" class="form-label">sR gained/losed</label>
                <input type="text" class="form-control" id="sr" name="safety_rating">
            </div>
            <div class="col-md-4">
                <label for="sof" class="form-label">SOF of the race</label>
                <input type="number" class="form-control" id="sof" name="SOF">
            </div>

            <!--Columna de seconds to pole / seconds end race / training-->
            <div class="col-md-4">
                <label for="spole" class="form-label">Seconds to pole</label>
                <input type="text" class="form-control" id="spole" name="seconds_to_pole">
            </div>
            <div class="col-md-4">
                <label for="stoleader" class="form-label">Seconds to the leader</label>
                <input type="text" class="form-control" id="stoleader" name="seconds_to_leader">
            </div>
            <div class="col-md-4">
                <label for="training" class="form-label">Training</label>
                <select class="form-select" aria-label="Default select example" id="training" name="training">
                    <option value="1" selected>No</option>
                    <option value="2">Less than two hours</option>
                    <option value="3">More than two hours</option>
                </select>
            </div>
            <!--Boton de enviar-->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>
</body>
</html>
