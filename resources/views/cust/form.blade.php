<div class="row">
    <div class="col-md-12">
        <div class="box-body">
            <div class="form-group">
                <label for="name">First Name</label>
            {!! Form::text('name', null, array('required' => 'required', 'autofocus' => 'autofocus','placeholder' => 'First Name','class' => 'form-control')) !!}
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           </div>
            <div class="form-group">
                <label for="dob">Phone</label>
                {!! Form::number('no_handphone', null, array('required' => 'required', 'autofocus' => 'autofocus','placeholder' => 'Phone Number','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {!! Form::text('email', null, array('required' => 'required', 'autofocus' => 'autofocus','placeholder' => 'Email','class' => 'form-control')) !!}
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>