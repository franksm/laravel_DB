@extends('layouts.layout')
@section('header_title', 'Add People')
@section('content')

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.selectInterest').select2({placeholder: "Select Interest"});
    });
</script>

<br>
 
<form action="{{ route('people.store') }}" method="POST" name="add_people">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Age</strong>
            <input type="text" name="age" class="form-control" placeholder="Enter Age">
            <span class="text-danger">{{ $errors->first('age') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Born</strong>
            <input type="text" name="born" class="form-control" placeholder="Enter Born">
            <span class="text-danger">{{ $errors->first('born') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <strong>Interest</strong><br>
        <select class="selectInterest" style="width:100%;" name="interests[]" multiple="multiple" required>
            @foreach ($interests as $interest)
                <option value='{{ $interest->id }}'>{{$interest->interest}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection
