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
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
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
                                    
                                    <td>  <a href="" class="btn bg-red waves-effect" onClick="return confirm ('Bạn có muốn xóa không')">Khóa tài khoản</a></td>
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