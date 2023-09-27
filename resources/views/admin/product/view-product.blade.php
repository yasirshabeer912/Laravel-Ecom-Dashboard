@extends('admin.adminlayout')
@section('title', 'View product')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">products</h2>
                    <a href="{{url('admin/add-product')}}">

                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add product</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    @if (session('status'))
                                    <div class="alert alert-success">{{ session('status') }}</div>
                                @endif
                    <table class="table table-bordered table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item )
                                
                            <tr >
                                <td lass="align-middle">{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->product_slug}}</td>
                                <td>{{$item->category->category_name}}</td>
                                <td>
                                    <img src="{{asset('uploads/images/'.$item->image)}}" width="80px" height="80px" alt="Img" class=" object-fit-cover">
                                <td>
                                    <a href="{{url('admin/edit-product/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                    @if ($item->status==1)    
                                    <a href="{{url('admin/edit-product/status/0/'.$item->id)}}" class="btn btn-success">Active</a>
                                    @elseif ($item->status==0)
                                    <a href="{{url('admin/edit-product/status/1/'.$item->id)}}" class="btn btn-warning">Deactive</a>
                                    @endif

                                    <a href="{{url('admin/delete-product/'.$item->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>
</div>
@endsection