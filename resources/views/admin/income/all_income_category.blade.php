@extends('admin.layouts.main_template')
@section('title')
All Income Category - mFamily app
@endsection
@section('dashboard')
<div class="col-md-12">
    <h5 class="card-header m-0 me-2 pb-3">All Income Category</h5>
    <div class="table-responsive text-nowrap">
        @if (session()->has('message'))
            <div class="alert alert-success">
            {{ session()->get('message') }}
            </div> 
        @endif
        <table class="table">
          <thead>
            <tr>
              <th>SL</th>
              <th>Category Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($categories as $key => $item)   
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('edit.income.category', $item->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i>Edit</a>
                    <a href="" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i>Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection
