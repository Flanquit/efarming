@extends('layouts.app', ['activePage' => 'farmers', 'titlePage' => __('Add Farmer')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container" style="height: auto;">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('store-farmer') }}">
                            @csrf

                            <div class="card card-login card-hidden mb-3">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title"><strong>{{ __('Register Farmer') }}</strong></h4>
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
                                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="bmd-form-group{{ $errors->has('phone') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                                            </div>
                                            <input type="text" name="phone" class="form-control" placeholder="{{ __('+263...') }}" value="{{ old('name') }}" required>
                                        </div>
                                        @if ($errors->has('phone'))
                                            <div id="name-error" class="error text-danger pl-3" for="phone" style="display: block;">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bmd-form-group{{ $errors->has('location') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">map</i>
                  </span>
                                            </div>
                                            <input type="text" name="location" class="form-control" placeholder="{{ __('Address...') }}" value="{{ old('name') }}" required>
                                        </div>
                                        @if ($errors->has('location'))
                                            <div id="name-error" class="error text-danger pl-3" for="location" style="display: block;">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </div>
                                        @endif
                                    </div>




                                    <div class="bmd-form-group{{ $errors->has('location') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            <span class="input-group-text">
                                                {{-- <i class="material-icons">map</i> --}}
                                            </span>
                                            
                                            </div>
                                          
                                            <select class="form-control" name="product" required>
                                                <option >Select Product</option>
                                                <option value="Beans">Beans</option>
                                                <option value="Carrots">Carrots</option>
                                                <option value="Groundnuts">Groundnuts</option>
                                                <option value="Dovi">Dovi</option>
                                                <option value="Maputi">Maputi</option>
                                                <option value="Maize">Maize</option>
                                                <option value="Derere">Derere</option>
                                                <option value="Tomatoes">Tomatoes</option>
                                                <option value="Meat">Meat</option>
                                                <option value="Mbambaira">Mbambaira</option>
                                              </select>

                                              
                                        </div>
                                        @if ($errors->has('location'))
                                            <div id="name-error" class="error text-danger pl-3" for="location" style="display: block;">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-check mr-auto ml-3 mt-3">

                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link">{{ __('Submit Farmer') }}</button>
                                    <a href="{{route('farmers')}}"  class="btn btn-warning btn-link btn">{{ __('Back to Farmers') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
