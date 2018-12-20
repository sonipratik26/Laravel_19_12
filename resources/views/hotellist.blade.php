@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Hotel List</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- You are logged in! -->
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>Hotel Address</th>
                                    <th>Hotel Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hotellist as $hotel)
                                    <tr>
                                        <td>{{ $hotel->hotel_name }}</td>
                                        <td>{{ $hotel->hotel_address }}</td>
                                        <td>{{ $hotel->hotel_phone_number }}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
