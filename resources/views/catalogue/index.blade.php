@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'catalogue', 'title' => __('Catalogue')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8">

                <main>

                    <div class="container marketing">
                        <div class="container">
                            <div class="row row-cols-2">
                                <div class="col-4" style="border-right-style: solid;border-right-color: #aaaaaa;border-right-width: 2px;">
                                    <h5>Product Categories</h5>
                                    <ul class="list-group list-group-flush">
                                        @foreach($categories as $c)
                                            <li class="list-group-item">
                                                <a href="{{url('/all-products/'.$c->id)}}" style="font-size: 0.9em;text-decoration: none; cursor: pointer;" class="text-primary">
                                                    {{$c->name}}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>

                                </div>
{{--                                <div class="col-8">--}}
{{--                                    <div class="row g-1 my-3 mx-1">--}}
{{--                                        @foreach($products as $product)--}}
{{--                                            <div class="col-4">--}}
{{--                                                <img class="bd-placeholder-img " width="218" height="125"--}}
{{--                                                     src="{{ asset('assets/index-images/products/images/'.$product->productImage)}}"--}}
{{--                                                     role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">--}}

{{--                                                <h6 class="my-3">--}}
{{--                                                    <a class="text-black-50" style="text-decoration: none"  href="{{url('view-product/'.$product->id)}}" target="_self" title="{{$product->modelNo}}">--}}
{{--                                                        {{$product->modelNo}}--}}
{{--                                                    </a>--}}
{{--                                                </h6>--}}
{{--                                                <p class="text-body">--}}
{{--                        <span style="font-size: 0.8em;font-family: helvetica, arial, sans-serif;">{{$product->description}}--}}
{{--                        </span>--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    <a class="read_more text-success" style="text-decoration: none" href="{{url('view-product/'.$product->id)}}" title="details" target="_self">--}}
{{--                                                        <i class="bi bi-arrow-right-circle"></i> &nbsp;details--}}
{{--                                                    </a>--}}
{{--                                                </p>--}}
{{--                                            </div><!-- /.col-lg-4 -->--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-8">
                                    <div class="row bg-white g-1 my-5 mx-1">
                                        <h1 class="text-danger p-lg-5 m-5">Under Construction</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>

            </div>
        </div>
    </div>

@endsection
