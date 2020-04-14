@extends('layouts.layout')
@section('header_title', 'People List')
@section('nav_people', 'active')
@section('content')
  <a href="{{ route('people.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Age</th>
                 <th>Born</th>
                 <th>Created at</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($peoples as $people)
              <tr>
                 <td>{{ $people->id }}</td>
                 <td>{{ $people->name }}</td>
                 <td>{{ $people->age }}</td>
                 <td>{{ date('Y-m-d', strtotime($people->born)) }}</td>
                 <td>{{ date('Y-m-d', strtotime($people->created_at)) }}</td>
                 <td><a href="{{ route('people.edit',$people->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('people.destroy', $people->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $peoples->links() !!}
       </div> 
   </div>
 @endsection  
