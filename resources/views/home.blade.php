@extends('layouts.app')

@section('content')
@if(Auth::user()->email == 'admin@gmail.com')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Add Hotel</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- You are logged in! -->
                        <form action="{{route('addhotel')}}" method="POST">
                            {!! csrf_field() !!}
                            <div class="clearfix">
                                <div class="col-md-4">
                                    <label for="hotel_name">Hotel Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_name" name="hotel_name" class="form-control" type="text" value="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_address">Hotel Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_address" name="hotel_address" class="form-control" type="text" value="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_contact_number">Hotel Contact Number</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_contact_number" name="hotel_contact_number" class="form-control" type="text" value="">
                                </div>
                                <div class="text-center">
                                    <input id="hotel_submit" name="hotel_submit" class="btn btn-success" type="submit" value="Submit">
                                    <input id="hotel_reset" name="hotel_reset" class="btn btn-danger" type="reset" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="text-center">
        <a href="{{ route('gethotellist') }}" class="btn btn-primary">Hotel list</a>
    </div>
@endif    
@endsection
