@extends('admin.layouts.main_template')
@section('title')
Edit Income Catergory - mFamily app
@endsection
@section('dashboard')
<div class="col-md-12">
    <h5 class="card-header m-0 me-2 pb-3">Edit Income Category</h5>
    <div class="card-body">
        <form action="{{ route('update.income.category') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $categories->id }}">
          <div class="row mb-3">
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" value="{{ $categories->name }}">
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update Income Category</button>
            </div>
          </div>
        </form>
      </div>
</div>
@endsection
