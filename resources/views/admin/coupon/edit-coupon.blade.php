@extends('admin.adminlayout')
@section('title', 'edit coupon')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">add coupon</h2>
                       <a href="{{url('admin/coupon')}}">
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow"></i>View coupon</button>
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
                                <h3 class="text-center title-2">Add coupon</h3>
                            </div>

                            <form action="{{url('admin/updatecoupon/'.$coupon->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Coupon Title</label>
                                    <input id="cc-pament" name="title" type="text" class="form-control" value="{{$coupon->title}}"
                                        aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Coupon Value</label>
                                    <input id="cc-pament" name="value" type="text" class="form-control" value="{{$coupon->value}}"
                                        aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">coupon Code</label>
                                    <input id="cc-name" name="code" type="text" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card" value="{{$coupon->value}}"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Add coupon</span>

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
