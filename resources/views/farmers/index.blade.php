@extends('layouts.app', ['activePage' => 'farmers', 'titlePage' => __('Farmer List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"> eFarmers List</h4>
                            <p class="card-category"> Here is all farmers on this platform</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('create-farmer')}}" class="btn btn-sm btn-primary">Register Farmer</a>
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
                                        Location
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Contact
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                    <th>
                                        Store
                                    </th>

                                    <th>
                                        Product
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($farmers as $farmer)
                                    <tr>
                                        <td>
                                            {{$farmer->id}}
                                        </td>
                                        <td>
                                            {{$farmer->name}}
                                        </td>
                                        <td>
                                            {{$farmer->location}}
                                        </td>
                                        <td>
                                            {{$farmer->email}}
                                        </td>
                                        <td>
                                            {{$farmer->phone}}
                                        </td>
                                        <td>
                                            @if($farmer->status == 1)
                                               Active
                                            @else
                                                Inactive
                                            @endif
                                        </td>
                                        <td>
                                            @if($farmer->status == 1)
                                                <form action="">
                                                    <button class="btn btn-warning btn-sm" >Deactivate</button>
                                                </form>
                                            @else
                                                <form action="">
                                                    <button class="btn btn-success btn-sm" >Activate</button>
                                                </form>
                                            @endif

                                        </td>
                                        <td>
                                            <form action="{{route('farmer-products')}}" method="POST">
                                                @csrf
                                                <input type="text" value="{{$farmer->id}}" hidden>
                                                <button class="btn btn-primary btn-sm" >Manage Products</button>
                                            </form>
                                        </td>
                                        <td>
                                            {{$farmer->product}}
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
        </div>
    </div>
@endsection
