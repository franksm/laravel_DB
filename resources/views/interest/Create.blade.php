@extends('interest.layout')
 
@section('content')

<h2 style="margin-top: 12px;" class="text-center">Add Interest</a></h2>
<br>
 
<form action="{{ route('interest.store') }}" method="POST" name="add_interest">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Interest</strong>
            <input type="text" name="interest" class="form-control" placeholder="Enter Interest">
            <span class="text-danger">{{ $errors->first('interest') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection
