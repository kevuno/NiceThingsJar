@extends("layouts.app")
@section('content')
	@foreach($JournalEntries as $entry)

	<!--Card-->
	<div class="row justify-content-md-center">
	    <div class="col col-lg-6">
			<div class="card ovf-hidden">
			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src="img/journal_img/{{$entry->image_path}}" class="img-fluid" alt="">
			        <a>
			            <div class="mask waves-effect waves-light journal_activator"></div>
			        </a>
			    </div>
			    <!--/.Card image-->
			    <!--Card content-->
			    <div class="card-block">
			        <!--Social shares button-->
			        <a class="activator"><i class="fa fa-share-alt"></i></a>
			        <!--Title-->
			        <h4 class="card-title">{{$entry->title}}</h4>
			        <hr>
			        <!--Text-->
			        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			        <a class="link-text"><h5 class="journal_activator">Read more <i class="fa fa-chevron-right journal_activator"></i></h5></a>
			    </div>
			    <!--/.Card content-->
			    <!--Card reveal-->
			    <div class="card-reveal">
			        <!--Content-->
			        <div class="content text-center">
			            <h4 class="card-title">Social shares <i class="fa fa-close"></i></h4>
			            <hr>
			            <p class="comment-text">
							{{$entry->content}}
						</p>
			        </div>
			        <!--/.Content-->
			    </div>
			    <!--/.Card reveal-->
			</div>
			<hr>
		</div>
	</div>
	<!--/.Card-->
	@endforeach
@stop