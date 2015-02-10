<div class="modal fade" id="{{$client->slug}}Modal" tabindex="-1" role="dialog" aria-hidden="true">
 	<!--<div class="modal-dialog modal-lg">-->
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<div class="h3 modal-title">{{$client->name}}</div>
      		</div>
      		<div class="modal-body">
      			<div class="row">
      				<div class="col-sm-7 col-sm-push-5">
      					@if(count($client->assets) == 1)
      					<p><img src="{{url('/').$client->featured_img}}" alt="{{$client->name}}" class="img-responsive center-block" /></p>
      					@else
      					<div id="{{$client->slug}}-carousel" class="owl-carousel owl-theme">
	      					@foreach($client->assets as $asset)
	      						<div><img data-src="{{url('/').$asset->path}}" src="{{url('/')}}/img/ajax-loader.gif" alt="{{$asset->short_description}}" class="img-responsive center-block lazyOwl" /></div>
	      					@endforeach
      					</div>
      					@endif
      				</div>
      				<div class="col-sm-5 col-sm-pull-7">
      					@if (substr($client->description, 0, 3) != '<p>')
      					<p>
      					@endif
      					{{$client->description}}
      					@if (substr($client->description, -4) != '</p>')
      					</p>
      					@endif
		        		<p>Services provided:</p>
		        		<ul>
		        		@foreach($client->services as $service)
		        			<li>{{$service}}</li>
		        		@endforeach
		        		</ul>
		        		@if($client->is_use_url == 1)
		        		<p>See the full site at <a href="{{$client->url}}" rel="external" target="_blank">{{$client->url}}</a>.</p>
		        		@endif

		        		@if($client->testimonials)
		        		@foreach($client->testimonials as $testimonial)
		        		<p class="testimonial"><strong>&ldquo;</strong> {{$testimonial->testimonial}} <strong>&rdquo;</strong></p>
		        		<p class="testimonial-author text-right">&mdash; {{$testimonial->author}}</p>
		        		@endforeach
		        		@endif
      				</div>
      			</div>
        		
      		</div>
    	</div><!-- /.modal-content -->
  	<!--</div>--><!-- /.modal-dialog -->
</div><!-- /.modal -->