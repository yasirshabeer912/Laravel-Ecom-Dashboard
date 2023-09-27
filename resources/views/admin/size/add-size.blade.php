@extends('admin.adminlayout')
@section('title', 'Add size')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">add size</h2>
                       <a href="{{url('admin/size')}}">
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow"></i>View size</button>
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
                                <h3 class="text-center title-2">Add size</h3>
                            </div>

                            <form action="{{url('admin/addsize')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Size </label>
                                    <input id="cc-pament" name="size" type="text" class="form-control"
                                        aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Add size</span>

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
