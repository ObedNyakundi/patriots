@extends('people.layout.app')

@section('page-title')
: Home
@endsection

@section('content-section')
		<div class="row ">
			<!-- use this section to display the patriots -->

			<div class="col-md-12 col-sm-12 col-xs-12 pat-card relative-center" 
			style="max-width:600px;">
				 <div class="w3-card-4" style="padding:1.2rem; border-radius: 20px;">
				  <form method="post" action="{{ route('patriot.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                       <div class="mb-6">
                        <div class="text-center"> <h3><i class="fa fa-user"></i> Add a Patriot</h3> </div>
                        <label for="image">Select Image*:</label>
                        <input type="file" required value="" placeholder="e.g Rex Masai" class="form-control" name="image" id="image"> <br>
                        <label for="name">Name*:</label>
                        <input type="text" required value="" placeholder="e.g Rex Masai" class="form-control" name="name" id="name"> <br>

                        <label for="dob">Date of Birth*:</label>
                        <input type="date" required value="" placeholder="Pick Date" class="form-control" name="date_of_birth" id="dob"> <br>

                        <button type="submit" class="btn w3-black w3-round w3-round-xxlarge w3-hover-orange">
                            ADD  <i class="fa fa-save"></i>
                        </button>
                       </div>
                   </form>
				</div> 
			</div>
			
		</div>
@endsection
