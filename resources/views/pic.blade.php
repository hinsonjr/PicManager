@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
	<div id='addPicForm'>
<!-- 	<AddPickForm :pics="{{json_encode($pics)}}"></AddPickForm> -->
         <div class="row">
             <div class="col-md-12">
                 <form method="post" action="/pics/store"  enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="form-group">
						<label for="userIdent">Enter your user identity</label>
						<input type="text" class="form-control" id="userIdent" name="userIdent" placeholder="This will identify the owner of your pictures">
					</div>
					<div class="form-group">
						<label for="picName">Enter a name for your picture</label>
						<input type="text" class="form-control" id="picName" name="picName" placeholder="Give your picture a name">
					</div>
					<div class="form-group">
						<label for="description">Enter any details about your picture</label>
						<textarea class="form-control" id="description" name="description" placeholder="Add  details about your picture"></textarea>
					</div>
					<div class="form_group">
						<label for="picture">Choose the picture you would like to upload from your device.</label>
						<input type="file" id="picture" name="picture" class="form-control">
					</div>		
					<div class="form_group">
						<button type="submit" class="btn btn-primary">Upload Picture</button>
					</div>
				</form>
             </div>
         </div>
	</div>
	<div id='piclist'>
		<p>Here are your pics.</p>
		<div id="message"></div>
		@foreach ($pics as $pic)
		<li>Name: {{ $pic->name }} <br>{{ $pic->description }}</li>
		<img src="{{$pic->storeUrl}}" alt="{{$pic->name}}" >
		@endforeach
	</div>
@endsection
