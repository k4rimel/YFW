@extends('layout')

@section('content')
<div class="row">
	<div class="content large-12 columns large-centered">
		<div class="row">
			<div class="posts large-6 columns large-centered">
				@foreach ($posts as $post)
				<div class="row">
					<div class="post large-12 columns"  data-id="{{$post->id}}">
						<div class="row">
							<div class="postLabel large-12 columns">
								{{ $post->label }}
							</div>
						</div>						
						<div class="row">
							<div class="imgContainer large-12 columns">
								<img src="{{'../'.$post->imgUri}}" alt="">
							</div>
						</div>
						<div class="row">
							<div class="paginationContainer columns large-4 large-centered">
								<?php echo $posts->links(); ?>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop