@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row">
           <div class="col-md-12 text-center">
               <h1 class="page.titel">My Todo List</h1>
           </div>

        </div>
    <div class="class col-lg-12">
    <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
        @csrf
        <div class="row">
            <div class="col-lg-8">
               <div class="class form-group">
                <input class="form-control" type="text" name="title" placeholder="Enter Task"">
               </div>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </div>
    </form><br>
</div>
<div class="col-lg-12">
    <div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tasks as $key => $task)
    <tr>
        <th scope="row">{{ $key++ }}</th>
        <td>{{ $task->title }}</td>
        <td>{{ $task->done }}</td>
        <td>@mdo</td>
      </tr>

    @endforeach


  </tbody>
</table>
    </div>
</div>

</div>


</div>


@endsection

@push('css')
<style>

    .page.titel{

         padding-top: 10vh;
         font-size: 50px;
         color: #3047c9;
    }
</style>

@endpush
