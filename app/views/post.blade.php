@extends('layout')

@section('content')
<div class="row">
	<div class="content large-12 columns large-centered">
		<div class="row">
			<div class="posts large-6 columns large-centered">
				<form action="{{ url('postImg') }}" method="POST"
				enctype="multipart/form-data">
					<div class="row">
						<div class="large-12 columns">
						  <label>Text
						    <input type="text" name="imgText" placeholder="yfw..." />
						  </label>
						</div>
					</div>	  
					<div class="row">
						<div class="large-12 columns">
							<label>Image
								<input type="file" name="fileInput" />
							</label>
						</div>
					</div>	  
					<div class="row">
						<div class="large-12 columns">
								<input type="submit">
						</div>
					</div>
			  	</form>
		  	</div>
	  	</div>
  	</div>
</div>
@stop