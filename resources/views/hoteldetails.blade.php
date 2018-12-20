@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Hotel Details</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('addhotel')}}" method="POST">
                            {!! csrf_field() !!}
                            <div class="clearfix">
                                <div class="col-md-4">
                                    <label for="hotel_id">Hotel Id</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_id" name="hotel_id" class="form-control" type="text" value="hotelid11" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <label for="user_id">User Id</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="user_id" name="user_id" class="form-control" type="text" value="userid22" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_name">Hotel Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_name" name="hotel_name" class="form-control" type="text" value="" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_address">Hotel Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_address" name="hotel_address" class="form-control" type="text" value="" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_contact_number">Hotel Contact Number</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="hotel_contact_number" name="hotel_contact_number" class="form-control" type="text" value="" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <label for="hotel_comment">Hotel Comments</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea id="hotel_comment" name="hotel_comment" class="form-control"></textarea>
                                </div>
                                <div class="text-center">
                                    <input id="comment_submit" name="comment_submit" class="btn btn-success" type="submit" value="Submit">
                                    <input id="comment_reset" name="comment_reset" class="btn btn-danger" type="reset" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
