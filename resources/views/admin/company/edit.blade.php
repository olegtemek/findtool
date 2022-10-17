@extends('admin.main')


@section('title')
Company Edit
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card card-primary">
          <div class="card-header">
          <h3 class="card-title">Edit company</h3>
          </div>
          
          
          <form action="{{route('admin.company.update', $company->id)}}" method="post">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              @if($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
              @endif
              <input type="text" class="form-control" id="title" value="{{$company->title}}" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
              <label for="number">number</label>
              @if($errors->has('number'))
                <div class="error text-danger">{{ $errors->first('number') }}</div>
              @endif
              <input type="text" class="form-control" id="number" value="{{$company->number}}" placeholder="Enter number" name="number">
            </div>
            <div class="form-group">
              <label for="link">link</label>
              @if($errors->has('link'))
                <div class="error text-danger">{{ $errors->first('link') }}</div>
              @endif
              <input type="text" class="form-control" id="link" value="{{$company->link}}" placeholder="Enter link" name="link">
            </div>
            <div class="form-group">
              <label for="portfolio">portfolio</label>
              @if($errors->has('portfolio'))
                <div class="error text-danger">{{ $errors->first('portfolio') }}</div>
              @endif
              <input type="text" class="form-control" id="portfolio" value="{{$company->portfolio}}" placeholder="Enter portfolio" name="portfolio">
            </div>
            <div class="form-group">
              <label for="offer">offer</label>
              @if($errors->has('offer'))
                <div class="error text-danger">{{ $errors->first('offer') }}</div>
              @endif
              <textarea type="text" class="form-control" id="offer" placeholder="Enter offer" name="offer">{{$company->offer}}</textarea>
            </div>
            <div class="form-group">
              <label for="find">find</label>
              @if($errors->has('find'))
                <div class="error text-danger">{{ $errors->first('find') }}</div>
              @endif
              <textarea type="text" class="form-control" id="find" placeholder="Enter find" name="find">{{$company->find}}</textarea>
            </div>

            <div class="form-group">
              <label for="category_id">category id</label>
              @if($errors->has('category_id'))
                <div class="error text-danger">{{ $errors->first('category_id') }}</div>
              @endif
              <select name="category_id" id="" class="form-control">
                @foreach ($categories as $cat)
                @if ($cat->id == $company->id)
                <option value="{{$cat->id}}" selected>{{$cat->title}}</option>
                @else
                <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endif
                @endforeach
              </select>
            </div>
          
              <br>
              <br>
              <br>


            <div class="form-group">
              <label for="position">position</label>
              @if($errors->has('position'))
                <div class="error text-danger">{{ $errors->first('position') }}</div>
              @endif
              <input type="text" class="form-control" id="position" value="{{$company->position}}" placeholder="Enter position" name="position">
            </div>
            <div class="form-group">
              <label for="text">text</label>
              @if($errors->has('text'))
                <div class="error text-danger">{{ $errors->first('text') }}</div>
              @endif
              <input type="text" class="form-control" id="text" value="{{$company->text}}" placeholder="Enter text" name="text">
            </div>

            <div class="form-group">
              <label for="active">
                is active
                @if ($company->active == true)
                <input type="checkbox" checked id="active" name="active">
                @else
                <input type="checkbox" id="active" name="active">
                @endif
              </label>
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