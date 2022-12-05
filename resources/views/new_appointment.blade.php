@extends('layouts.admin')
@section('content')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href=
          "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          rel="stylesheet">
    <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
    </script>
    <script src=
            "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>

    <!-- Include Moment.js CDN -->
    <script type="text/javascript" src=
    "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js">
    </script>

    <!-- Include Bootstrap DateTimePicker CDN -->
    <link
        href=
        "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <script src=
            "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
    </script>
    <style>
        #con{
            align-items: center;
            text-align:center;
        }
        #new{
            border-right: 2px solid green;
        }

        #but{
            align-items: center;
            text-align:center;
            width:60%;

        }
    </style>

    <div class="container_2 justify-content-center d-flex list-inline text-center">
        <div class="list-group" id="but">
                <form method="post" action="add_new_appointment" id="gomb">
                    <div  style="margin-top: 12px;">
                        <label>Válasszon időpontot!</label>
                        @csrf
                        <input class="form-control" type="text" name="newAppointment" id="datetime">
                        <input type="submit" class="list-group-item-info list-group-item list-group-item-action mt-1" style="margin-top: 25px;" value="Hozzáadás">
                        <a   class="list-group-item-info list-group-item list-group-item-action mt-2" href="{{route('logout') }}"
                             onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                            Kijelentkezés<a/>
                        </a>
                    </div>
                </form>

            <script>
                $('#datetime').datetimepicker({
                    format: 'YY/MM/DD hh:mm:ss'
                });
            </script>
        </div>
    </div>

@endsection
