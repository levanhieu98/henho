@extends('layoutsadmin.index')
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Danh sách Blog
                    </h2>
                    @if(Session::has('alert'))
                    <p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
                    @endif

                    @if(Session::has('error'))
                    <p class="alert alert-danger row-md-6">{{Session::get('error')}}</p>
                    @endif

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th> 
                                    <th>Cập nhât/Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bl as $b)
                                <tr>
                                    <td>{{$b->id}}</td>
                                    <td>{{$b->title}}</td>
                                    <td>{{$b->descriptive}}</td>   
                                    <td>  
                                        <a href="/admin/suablog/{{$b->id}}" class="btn bg-blue waves-effect">Sữa</a> &nbsp;
                                        <a href="/admin/xoablog/{{$b->id}}/{{$b->Id_category}}" class="btn bg-red waves-effect" onClick="return confirm ('Bạn có muốn xóa không')">Xoá</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection