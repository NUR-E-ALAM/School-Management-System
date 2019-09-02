<div class="card">
<div class="card-body">
	
<div class="row">
        <div class="col-md-6">	
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Student Name') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::text('name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Student Name')) !!}
</div>
</div>
</div>

        <div class="col-md-6">	
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Student Image') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::file('image', null,
    array('required', 'class'=>'form-control')) !!}
</div>
</div>
</div>
</div>


<div class="row">
        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Gender') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::select('gender', $genders, null,
array('name'=>'genders','class'=>'form-control')) !!}
</div>
</div>
</div>

        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Date of birth') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::date('dob', null,
    array('required', 'class'=>'form-control')) !!}
</div>
</div>
</div>
</div>

<div class="row">
        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Religion') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::select('religion', $religions, null,
array('name'=>'religion','class'=>'form-control')) !!}
</div>
</div>
</div>

        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Nationality') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::select('nationality', $nationalities, null,
array('name'=>'nationality','class'=>'form-control')) !!}
</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Email') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::email('email', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'example@domain.com')) !!}
</div>
</div>
</div>

        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Mobile') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::text('mobile', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'mobile')) !!}
</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Password') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::password('password1', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'')) !!}
</div>
</div>
</div>

        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Retype-Password') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::password('password2', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'')) !!}
</div>
</div>
</div>
</div>

</div>
</div>

		  <!---For Parent Information Start-->

<div class="card mt-3">
            <div class="card-body">
            <h4 class="card-title">Parent Information</h4>
			
			
			<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Father Name') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::text('father_name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Father Name')) !!}
</div>
</div>
</div>

 <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Father Image') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::file('father_image', null,
    array('required', 'class'=>'form-control')) !!}
</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Mother Name') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::text('mother_name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Father Name')) !!}
</div>
</div>
</div>

 
</div>


<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Mobile Number') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::number('mobile_number', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Mobile Number')) !!}
</div>
</div>
</div>

 <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Email') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::email('email', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'example@domain.com')) !!}
</div>
</div>
</div>
</div>

<div class="row">
	<div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Password') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::password('papassword1', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'')) !!}
</div>
</div>
</div>

        <div class="col-md-6">
<div class="form-group row">
	 <div class="col-sm-3 col-form-label">
    {!! Form::label('Re-type Password') !!}
	</div>
	 <div class="col-sm-9">
    {!! Form::password('papassword2', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'')) !!}
</div>
</div>
</div>
</div>

</div>
</div>

    <!---For Parent Information end-->	
            
             <!---For Class Information Start-->  
			 
			  <div class= "card mt-3">
                                <div class= "card-body">
                                <h4 class="card-title">Class Information</h4>
			
			<div class="row">
        <div class="col-md-6">
<div class="form-group row">
	<div class="col-sm-3 col-form-label">
    {!! Form::label('Class') !!}
	</div>
    <div class="col-sm-9">
    {!! Form::select('class', $classes, null,
array('name'=>'class','class'=>'form-control')) !!}
</div>
</div>
</div>

    
</div>
</div>

</div>
</div>

  <!---For Class Information end-->
                                
                                <!---address Start here---->
                                
                                <div class="card mt-3">
                                <div class = "card-body">
                                
                                <p class="card-title">
                                  Address
                                </p>
								<div class="row">
                                <div class="col-md-6">
                                <p class="card-description">
                                  present Address
                                </p>
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Care of') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('precare_of', null,array('required', 'class'=>'form-control',  'placeholder'=>'Care of')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Address') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::textarea('preaddress', null,array('required', 'class'=>'form-control',  'placeholder'=>'Address')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('District') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('predistrict', null,array('required', 'class'=>'form-control',  'placeholder'=>'Care of')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Thana/Upazila') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('prethana', null,array('required', 'class'=>'form-control',  'placeholder'=>'Thana/Upazila')) !!}
                                      </div>
                                    </div>
									
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Village') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('previllage', null,array('required', 'class'=>'form-control',  'placeholder'=>'Village')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Post Office') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('prepost', null,array('required', 'class'=>'form-control',  'placeholder'=>'Post Office')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Post code') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('prepost-code', null,array('required', 'class'=>'form-control',  'placeholder'=>'Post code')) !!}
                                      </div>
                                    </div>
									
									
									  </div>
									  
							
							
							<div class="col-md-6">
                                <p class="card-description">
                                  parment Address
                                </p>
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Care of') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('parcare_of', null,array('required', 'class'=>'form-control',  'placeholder'=>'Care of')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Address') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::textarea('paraddress', null,array('required', 'class'=>'form-control',  'placeholder'=>'Address')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('District') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('pardistrict', null,array('required', 'class'=>'form-control',  'placeholder'=>'Care of')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Thana/Upazila') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('parthana', null,array('required', 'class'=>'form-control',  'placeholder'=>'Thana/Upazila')) !!}
                                      </div>
                                    </div>
									
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Village') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('parvillage', null,array('required', 'class'=>'form-control',  'placeholder'=>'Village')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Post Office') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('parpost', null,array('required', 'class'=>'form-control',  'placeholder'=>'Post Office')) !!}
                                      </div>
                                    </div>
									
									<div class="form-group row">
                                 <div class="col-sm-3 col-form-label">    
									 {!! Form::label('Post code') !!}
									 </div>
                               <div class="col-sm-9">
                           {!! Form::text('parpost-code', null,array('required', 'class'=>'form-control',  'placeholder'=>'Post code')) !!}
                                      </div>
                                    </div>
									
									
									  </div>



</div>
</div>

