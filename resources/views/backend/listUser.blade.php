@extends('layoutsadmin.index')
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                     Danh sách User
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
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Khóa tài khoản</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr>
                                <td>{{$us->id}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{($us->gender)==1?'Nam':'Nữ'}}</td>
                                 <td>{{$us->status}}</td>

                                <td> <a href="/admin/khoataikhoan/{{$us->id}}" class="btn bg-red waves-effect btn-sm" onClick="return confirm ('Bạn muốn khóa tài khoản ')">Khóa tài khoản</a> 
                                    <a href="/admin/motaikhoan/{{$us->id}}" class="btn bg-blue btn-sm waves-effect" onClick="return confirm ('Bạn muổn mỏ tài khoản')">Mở tài khoản</a></td>
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