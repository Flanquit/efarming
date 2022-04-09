@extends('layouts.app', ['activePage' => 'farmers', 'titlePage' => __('Add Farmer Products')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container" style="height: auto;">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="POST" action="{{ route('store-farmer-products') }}">
                            @csrf

                            <input type="text" name="farmerId" value="{{$farmerId}}" hidden>
                            <div class="card card-login card-hidden mb-3">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title"><strong>{{ __('Add Product') }}</strong></h4>
                                </div>
                                <div class="card-body ">
                                    <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                                            </div>
                                            <input type="text" name="name" class="form-control" placeholder="{{ __('Product Name...') }}" value="{{ old('name') }}" required>
                                        </div>
                                        @if ($errors->has('name'))
                                            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="bmd-form-group{{ $errors->has('desc') ? ' has-danger' : '' }} mt-3">
                                        <label for="" class=" bmd-label">Product Description</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                                            </div>
                                            <textarea placeholder="" name="desc" id="desc" cols="30" rows="5" class="form-control">
                                            </textarea>
                                        </div>
                                        @if ($errors->has('desc'))
                                            <div id="name-error" class="error text-danger pl-3" for="desc" style="display: block;">
                                                <strong>{{ $errors->first('desc') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="bmd-form-group{{ $errors->has('price') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                                            </div>
                                            <input type="text" name="price" class="form-control" placeholder="{{ __('0.00') }}" value="{{ old('price') }}" required>

                                        </div>
                                        @if ($errors->has('price'))
                                            <div id="name-error" class="error text-danger pl-3" for="price" style="display: block;">
                                                <strong>{{ $errors->first('price') }}</strong>
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

                                    <div class="bmd-form-group{{ $errors->has('is_related_to') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                                            </div>
                                            <select name="is_related_to" id="is_related_to" class="form-control">
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->productName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('is_related_to'))
                                            <div id="name-error" class="error text-danger pl-3" for="is_related_to" style="display: block;">
                                                <strong>{{ $errors->first('is_related_to') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bmd-form-group{{ $errors->has('category') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                                            </div>
                                            <select name="category" id="category" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('category'))
                                            <div id="name-error" class="error text-danger pl-3" for="category" style="display: block;">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </div>
                                        @endif
                                    </div>


                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-link">{{ __('Submit') }}</button>
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
