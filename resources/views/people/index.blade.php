@extends('people.layout.app')

@section('page-title')
: Home
@endsection

@section('content-section')
		<div class="row ">
			<!-- use this section to display the patriots -->		

		@foreach($patriots as $patriot)
			<div class="col-md-4 col-sm-6 col-xs-12 pat-card">
				 <div class="w3-card-4">
				  <img src="{{ asset('/uploads/patriots/'.$patriot->image) }}" alt="Rex Masai" class="patriot-image">
				  <div class="w3-container w3-center">
				  	<h5 class="bolden">{{ $patriot->name }}</h5>
				  </div>
				  <div class="w3-container details-section">
				  	<span class="pat-label">Name:</span> <span class="pat-value">{{ $patriot->name }} </span><br>
				  	<span class="pat-label">D.O.B:</span> <span class="pat-value">{{ $patriot->date_of_birth }} </span><br>
				  	<span class="pat-label">D.O.D:</span> <span class="pat-value">{{ $patriot->date_of_death }} </span><br>
				  	<span class="pat-label">Gender:</span> <span class="pat-value">{{ $patriot->gender }} </span><br>
				  	<span class="pat-label">Cause of death:</span> <span class="pat-value"> {{ $patriot->cause_of_death }} </span><br>
				  	<span class="pat-label">Number of Flowers:</span> <span class="pat-value"> 0 </span><br>
				  </div>
				  <div class="w3-container w3-center pat-buttons">
				  	<button class="w3-round w3-round-xxlarge w3-button w3-blue w3-hover-aqua"
				  	onclick="location.href='{{ route('patriot.show',$patriot->id) }}'">
				  		Read Bio <i class="fa fa-eye"></i></button>

				  		<!-- Allow direct edit to the one who added the info -->
				  		@if((Auth::check()) && ($patriot->user->name == Auth::user()->name))
  					<button class="w3-round w3-round-xxlarge w3-button w3-green w3-hover-aqua">
  						Edit Profile <i class="fa fa-edit"></i></button>
  						@else
  					<button class="w3-round w3-round-xxlarge w3-button w3-green w3-hover-aqua">
  						Suggest Edition <i class="fa fa-edit"></i></button>
  						@endif
  					<button class="w3-round w3-round-xxlarge w3-button w3-orange w3-hover-aqua">
  						Give my flower <i class="fa fa-tree"></i></button>
				  </div>
				</div> 
			</div>
		@endforeach

		@foreach($patriots as $patriot)
			<div class="col-md-4 col-sm-6 col-xs-12 pat-card">
				 <div class="w3-card-4">
				  <img src="{{ asset('/uploads/patriots/'.$patriot->image) }}" alt="Rex Masai" class="patriot-image">
				  <div class="w3-container w3-center">
				  	<h5 class="bolden">{{ $patriot->name }}</h5>
				  </div>
				  <div class="w3-container details-section">
				  	<span class="pat-label">Name:</span> <span class="pat-value">{{ $patriot->name }} </span><br>
				  	<span class="pat-label">D.O.B:</span> <span class="pat-value">{{ $patriot->date_of_birth }} </span><br>
				  	<span class="pat-label">D.O.D:</span> <span class="pat-value">{{ $patriot->date_of_death }} </span><br>
				  	<span class="pat-label">Gender:</span> <span class="pat-value">{{ $patriot->gender }} </span><br>
				  	<span class="pat-label">Cause of death:</span> <span class="pat-value"> {{ $patriot->cause_of_death }} </span><br>
				  	<span class="pat-label">Number of Flowers:</span> <span class="pat-value"> 0 </span><br>
				  </div>
				  <div class="w3-container w3-center pat-buttons">
				  	<button class="w3-round w3-round-xxlarge w3-button w3-blue w3-hover-aqua"
				  	onclick="location.href='{{ route('patriot.show',$patriot->id) }}'">
				  		Read Bio <i class="fa fa-eye"></i></button>

				  		<!-- Allow direct edit to the one who added the info -->
				  		@if((Auth::check()) && ($patriot->user->name == Auth::user()->name))
  					<button class="w3-round w3-round-xxlarge w3-button w3-green w3-hover-aqua">
  						Edit Profile <i class="fa fa-edit"></i></button>
  						@else
  					<button class="w3-round w3-round-xxlarge w3-button w3-green w3-hover-aqua">
  						Suggest Edition <i class="fa fa-edit"></i></button>
  						@endif
  					<button class="w3-round w3-round-xxlarge w3-button w3-orange w3-hover-aqua">
  						Give my flower <i class="fa fa-tree"></i></button>
				  </div>
				</div> 
			</div>
		@endforeach


	</div>
@endsection
