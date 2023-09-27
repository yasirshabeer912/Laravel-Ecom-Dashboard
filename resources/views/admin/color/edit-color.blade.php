@extends('admin.adminlayout')
@section('title', 'edit color')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">add color</h2>
                       <a href="{{url('admin/color')}}">
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow"></i>View color</button>
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
                                <h3 class="text-center title-2">Edit color</h3>
                            </div>

                            <form action="{{url('admin/updatecolor/'.$color->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">color </label>
                                    <input id="cc-pament" name="color" type="text" class="form-control" value="{{$item->color}}"
                                        aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                                        <span id="payment-button-amount">Update color</span>

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
