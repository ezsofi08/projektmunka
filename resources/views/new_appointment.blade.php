@extends('layouts.app')

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

        h1{
            text-align:center
        }

        #dropdown{
            width:200px;
        }
        #start{
            width:200px;
        }
        #end{
            width:200px;
        }
        #con{
            height: 600px;
        }

        #gomb{
            height:75px;
            width:200px;
        }


    </style>

<div class="container" style="background-color: white;" id="con">
    <h1 class="mb-3">Időpontfoglalás</h1>
    <!-- Include datetime input to display
      datetimepicker in container with
      relative position -->
        <div style="position: relative">
            <!-- Include input field with id so
                that we can use it in JavaScript
                to set attributes.-->
            <form method="post" action="add_new_appointment" id="gomb">
                <div  style="width:25%; position: absolute; margin-left: 38%; margin-top: 12px;">
                 <label>Válasszon időpontot!</label>
                 @csrf
                 <input class="form-control" type="text" name="newAppointment" id="datetime">
                <input type="submit" class="btn btn-primary" style="margin-top: 25px;" value="Hozzáadás">
                </div>
            </form>
        </div>

    <script>

        // Below code sets format to the
        // datetimepicker having id as
        // datetime
        $('#datetime').datetimepicker({
            format: 'YY/MM/DD hh:mm:ss'
        });
    </script>
</div>


@endsection
