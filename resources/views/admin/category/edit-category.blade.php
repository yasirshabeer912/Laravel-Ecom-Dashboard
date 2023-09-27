@extends('admin.adminlayout')
@section('title', 'Add Category')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">add Category</h2>
                       <a href="{{url('admin/category')}}">
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow"></i>View Category</button>
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
                                <h3 class="text-center title-2">Add Category</h3>
                            </div>

                            <form action="{{url('admin/updateCategory/'.$category->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                    <input id="cc-pament" name="category_name" type="text" value="{{$category->category_name}}" class="form-control"
                                        aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Category Slug</label>
                                    <input id="cc-name" name="category_slug" type="text" class="form-control " value="{{$category->category_slug}}">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Add category</span>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
