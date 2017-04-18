@extends('layouts.app')

@section('content')
    <!--Form without header-->
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="text-center">   
                <h3><i class="fa fa-hand-o-right"></i> Tell me about your day bby</h3>
                <h4>{{$time}}</h4>
                <hr class="mt-2 mb-2">
            </div>

            <!--Body-->
            <div class="md-form">
                <i class="fa fa-hand-peace-o prefix"></i>
                <input type="text" id="form3" class="form-control">
                <label for="form3">Title</label>
            </div>
            <br>
            <div class="md-form">
                <i class="fa fa-wheelchair-alt prefix"></i>
                <textarea type="text" id="form2" class="md-textarea journal-textarea"></textarea>
                <label for="form2">Journal entry</label>
            </div>

            <div class="text-center">
                <button class="btn btn-deep-orange">Send</button>
            </div>

        </div>
    </div>
    <!--/Form without header-->
@stop