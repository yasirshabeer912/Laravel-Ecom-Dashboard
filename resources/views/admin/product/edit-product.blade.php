@extends('admin.adminlayout')
@section('title', 'edit product')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">add product</h2>
                       <a href="{{url('admin/product')}}">
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow"></i>View product</button>
                       </a>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-lg-12">
                    <div class="card">
                        @if ($errors->any()){
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $errors )
                                    <div>{{$errors}}</div>
                                @endforeach
                            </div>
                        }
                            
                        @endif
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Product</h3>
                            </div>

                            <form action="{{url('admin/updateproduct/'.$product->id)}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Name </label>
                                        <input id="cc-pament" name="name" type="text" class="form-control" value="{{$product->name}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Product Slug </label>
                                        <input id="cc-pament" name="product_slug" type="text" class="form-control" value="{{$product->product_slug}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Category</label>
                                        <select name="category_id" class="form-control">
                                            <option disabled>Choose...</option>
                                                @foreach ($category as $item)
                                                <option value="{{ $item->id }}" {{$product->category_id== $item->id ? 'selected' : ''}}>
                                                    {{ $item->category_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Brand</label>
                                        <input id="cc-pament" name="brand" type="text" class="form-control" value="{{$product->brand}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cc-payment" class="control-label mb-1">Image</label>
                                        <input id="cc-pament" name="image" type="file" class="form-control"
                                            aria-required="true" aria-invalid="false">
                                            <img src="{{asset('uploads/images/'.$product->image)}}" width="80px" height="80px" alt="Img" class=" object-fit-cover">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cc-payment" class="control-label mb-1">Description</label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$product->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Short Description</label>
                                        <textarea name="short_description" id="" cols="30" rows="3" class="form-control">{{$product->short_description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Keywords</label>
                                        <textarea name="keywords" id="" cols="30" rows="3" class="form-control">{{$product->keywords}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Technical Specification</label>
                                        <input id="cc-pament" name="technical_specification" type="text" class="form-control" value="{{$product->technical_specification}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Warranty</label>
                                        <input id="cc-pament" name="warranty" type="text" class="form-control" required value="{{$product->warranty}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cc-payment" class="control-label mb-1">Uses</label>
                                        <input id="cc-pament" name="uses" type="text" class="form-control" value="{{$product->uses}}"
                                            aria-required="true" aria-invalid="false">
                                    </div>

                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Update product</span>

                                    </button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
