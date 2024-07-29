@extends('people.layout.app')

@section('page-title')
: Edit {{ $patriot->name }}
@endsection

@section('content-section')
		<div class="row ">
			<!-- use this section to display the patriots -->

			<div class="col-md-12 col-sm-12 col-xs-12 pat-card relative-center" 
			style="max-width:600px;">
				 <div class="w3-card-4" style="padding:1.2rem; border-radius: 20px;">
				  <form method="post" action="{{ route('patriot.update',$patriot->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                       <div class="mb-6">
                        <div class="text-center"> <h3><i class="fa fa-user"></i> {{ $patriot->name }}</h3> 
                        </div>
                        <div class="text-center">
                           <img style="width:100px; height: auto;" src="{{ asset('/uploads/patriots/'.$patriot->image) }}">
                        </div>

                        <label for="name">Name*:</label>
                        <input type="text" required placeholder="e.g Rex Masai" class="form-control" value="{{ $patriot ->name }}" name="name" id="name"> <br>

                        <label for="gender">Gender*:</label>
                        <select name="gender" id="gender" required class="form-control">
                        <option value="{{ $patriot ->gender }}">{{ $patriot ->gender }}</option> 
                        <option value="male">Male</option> 
                        <option value="female">Female</option>
                        </select>
                        <br>

                        <label for="pob">Place of Birth*:</label>
                        <input type="text" required value="{{ $patriot ->place_of_birth }}" placeholder="e.g Machakos Town" class="form-control" name="place_of_birth" id="pob"> <br>

                        <label for="dob">Date of Birth*:</label>
                        <input type="date" required value="{{ $patriot ->date_of_birth }}" placeholder="Pick Date" class="form-control" name="date_of_birth" id="dob"> <br>

                        <label for="pod">Place of Death*:</label>
                        <input type="text" required value="{{ $patriot ->place_of_death }}" placeholder="e.g Nairobi" class="form-control" name="place_of_death" id="pod"> <br>

                        <label for="dod">Date of Death*:</label>
                        <input type="date" required value="{{ $patriot ->date_of_death }}" placeholder="Pick Date" class="form-control" name="date_of_death" id="dod"> <br>

                        <label for="cod">Cause of Death*:</label>
                        <input type="text" required value="{{ $patriot ->cause_of_death }}" placeholder="e.g Gunshot by ugly Ndumba" class="form-control" name="cause_of_death" id="cod"> <br>

                        <button type="submit" class="btn w3-black w3-round w3-round-xxlarge w3-hover-orange">
                            Update  <i class="fa fa-save"></i>
                        </button>
                       </div>
                   </form>
				</div> 
			</div>
			
		</div>
@endsection
