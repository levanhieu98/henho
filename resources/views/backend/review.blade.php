@extends('layoutsadmin.index')
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                       Danh sách review
                   </h2>
                   @if(Session::has('alert'))
                   <p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
                   @endif
               </div>
               <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Id_review</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Id_user</th>
                                <th>Duyệt/Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($review as $rv)
                            <tr>
                                <td>{{$rv->Id_review}}</td>
                                <td>{{date('d-m-Y'),$rv->date}}</td>
                                <td>{{$rv->content}}</td>
                                <td>{{$rv->status}}</td>
                                <td>{{$rv->id}}</td>
                                <td>  <a href="/admin/duyetreview/{{$rv->Id_review}}" class="btn bg-blue waves-effect">Duyệt</a> &nbsp;
                                    <a href="/admin/xoareview/{{$rv->Id_review}}" class="btn bg-red waves-effect" onClick="return confirm ('Bạn có muốn xóa không')">Xoá</a>
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
<!-- #END# Exportable Table -->
</div>
@endsection