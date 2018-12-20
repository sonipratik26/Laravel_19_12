<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="bower_components/datatables.net-dt/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
        <link href="bower_components/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/datatables.net/js/jquery.dataTables.js"></script>
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                /*color: #636b6f;
                font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 96%;
                margin-top: 4%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                        @if(Auth::user()->email == 'admin@gmail.com')
                            <a href="{{ url('/home') }}">Add Hotel</a>
                        @endif    
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Hotel Id</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Hotel Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotellist as $hotel)
                            <tr>
                                <td>{{ $hotel->hotel_id }}</td>
                                <td>{{ $hotel->hotel_name }}</td>
                                <td>{{ $hotel->hotel_address }}</td>
                                <td>{{ $hotel->hotel_phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready( function () {
         var user_id = $('#user_id').val();
         //alert(user_id);
         var table = $('#table_id').DataTable();

         $('#table_id tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            alert( 'You clicked on '+data[0]+'\'s row' );
            //window.location = "{{ url('/') }}";
        });
    });
    

</script>