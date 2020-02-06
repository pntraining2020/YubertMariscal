<!DOCTYPE html>
<html>

<head>
    <script src="jquery-3.4.1.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/currentTime.js') }}"></script>

    <!-- STYLES -->
    <link href="{{ asset('css/timeTracker.css') }}" rel="stylesheet">


</head>

<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <center>
                        <div class="card-header text-success">
                            <h3>TIME TRACKER APP</h3>
                        </div>
                    </center>
                    <div class="card-body">
                        <h2>Name</h2>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option selected>Choose Name</option>
                                @foreach($names as $Names)
                                <option value="1">{{$Names['first_name']}} {{$Names['last_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p id="time"></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <button id="clockIn" type="button" class="btn btn-primary btn-lg">Clock In</button>
                <p id="time"></p>
                <button id="clockOut" type="button" class="btn btn-danger btn-lg ">Clock Out</button>
                <p id="time"></p>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success btn-lg">START</button>
                <button type="button" class="btn btn-danger btn-lg">END</button>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
    </script>
</body>

</html>