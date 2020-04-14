@extends('layouts.layout')
@section('nav_interest', 'active')
@section('content')
  <a href="{{ route('interest.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Interest</th>
                 <th>Created at</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($interests as $interest)
              <tr>
                 <td>{{ $interest->id }}</td>
                 <td>{{ $interest->interest }}</td>
                 <td>{{ date('Y-m-d', strtotime($interest->created_at)) }}</td>
                 <td><a href="{{ route('interest.edit',$interest->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('interest.destroy', $interest->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $interests->links() !!}
       </div> 
   </div>
 @endsection  
