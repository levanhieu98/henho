@extends('layoutsadmin.index')
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                @if(Session::has('alert'))
                <p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
                @endif
                @if(Session::has('error'))
                <p class="alert alert-danger">{{Session::get('error')}}</p>
                @endif
                <div class="header">
                    <h2>
                        Danh sách loại Blog
                    </h2>
                 
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhât/Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $cr)
                                <tr>
                                    <td>{{$cr->Id_category}}</td>
                                    <td>{{$cr->Ten_category}}</td>
                                    <td>{{$cr->Trangthai}}</td>
                                    <td>  
                                        <a href="/admin/sualoai/{{$cr->Id_category}}" class="btn bg-blue waves-effect">Sửa</a> &nbsp;
                                        <a href="/admin/xoaloai/{{$cr->Id_category}}" class="btn bg-red waves-effect" onClick="return confirm ('Bạn có muốn xóa không')">Xoá</a>
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