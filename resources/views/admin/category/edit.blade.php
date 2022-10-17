@extends('admin.main')


@section('title')
Category edit
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-primary">
          <div class="card-header">
          <h3 class="card-title">Edit category</h3>
          </div>
          
          
          <form action="{{route('admin.category.update', $category->id)}}" method="post">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              @if($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
              @endif
              <input type="text" class="form-control" id="title" value="{{$category->title}}" placeholder="Enter title" name="title">
            </div>
          
          <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
          </div>
      </div>
    </div>
  </div>
</section>

@endsection