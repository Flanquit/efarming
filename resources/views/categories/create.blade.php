@extends('layouts.app', ['activePage' => 'categories', 'titlePage' => __('Add Category')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container" style="height: auto;">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('store-category') }}">
                            @csrf

                            <div class="card card-login card-hidden mb-3">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title"><strong>{{ __('Add Category') }}</strong></h4>
                                </div>
                                <div class="card-body ">
                                    <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                                            </div>
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                                        </div>
                                        @if ($errors->has('name'))
                                            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bmd-form-group{{ $errors->has('imgrl') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">image</i>
                  </span>
                                            </div>
                                            <input type="file"  name="imgUrl" class="form-control" required>
                                        </div>
                                        @if ($errors->has('imgUrl'))
                                            <div id="email-error" class="error text-danger pl-3" for="imgUrl" style="display: block;">
                                                <strong>{{ $errors->first('imgUrl') }}</strong>
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-check mr-auto ml-3 mt-3">

                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link">{{ __('Submit Category') }}</button>
                                    <a href="{{route('categories')}}"  class="btn btn-warning btn-link btn">{{ __('Back to Categories') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
