@extends('layouts.app', ['activePage' => 'categories', 'titlePage' => __('Categories')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Categories</h4>
        <p class="card-category">Manage categories</p>
      </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('create-category')}}" class="btn btn-sm btn-primary">Add Category</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        image
                    </th>

                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            <img src="{{ asset('assets/categories/'.$category->imgUrl)}}" width="100px">
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
