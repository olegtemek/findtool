@extends('admin.main')


@section('title')
Categories
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.category.create')}}" class="btn btn-success">Create new category</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">All Categories</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#id</th>
                <th>Category title</th>

                <th>Edit/Delete</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->title}}</td>
              
              <td>
                <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                <form style="display:inline" action="{{route('admin.category.destroy', $category->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection