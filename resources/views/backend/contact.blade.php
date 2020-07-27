@extends('layoutsadmin.index')
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                     Danh sách liên hệ
                 </h2>
               
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Ngày gửi</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contact as $ct)
                            <tr>
                                <td>{{$ct->id}}</td>
                                <td>{{$ct->name}}</td>
                                <td>{{$ct->email}}</td>
                                <td>{{$ct->subject}}</td>
                                <td>{{$ct->message}}</td>
                                <td>{{date('d-m-Y'),$ct->date}}</td>
                                <td><button type="button" class="bg-success btn-sm" onclick="xuly(event)" id="{{$ct->id}}">{{($ct->status)==1?"Đã xử lý":"Xử lý"}}</button></td>
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
