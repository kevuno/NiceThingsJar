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
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{route('journal.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-hand-peace-o prefix"></i>
                    <input type="text" name="title" id="title" class="form-control">
                    <label for="title">Title</label>
                </div>
                <br>
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm btn-file">
                            <span>Dank image for the day</span>
                            <input type="file" name="image_path" id="image_path">
                        </div>
                        <div class="file-path-wrapper">
                           <input class="file-path validate" type="text" placeholder="Select the image">
                        </div>
                        <img id='img-upload'/>
                    </div>
                </div>                
                <br>
                <br>
                <div class="md-form">
                    <i class="fa fa-wheelchair-alt prefix"></i>
                    <textarea type="text" name="content" id="content" class="md-textarea journal-textarea"></textarea>
                    <label for="content">Journal entry</label>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-deep-orange" value="Send"> Send </button>
                </div>
            </form>
        </div>
    </div>
    <!--/Form without header-->
@stop