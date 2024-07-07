@extends('people.layout.app')

@section('page-title')
: Home
@endsection

@section('content-section')
		<div class="row ">
			<!-- use this section to display the patriots -->

			<div class="col-md-12 col-sm-12 col-xs-12 pat-card relative-center" style="max-width:500px">
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
				  	onclick="location.href='{{ route('patriot',$patriot->id) }}'">
				  		Back <i class="fa fa-eye"></i></button>
				  </div>
				</div> 
			</div>
			
		</div>
@endsection
