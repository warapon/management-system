@extends('admintl.layout')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-cogs"></i> จัดการห้อง
        <small>
            <ol class="breadcrumb">
                <li class="active">เมนูหลัก</a></li>
            </ol>
        </small>
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <div class="pull-left">
                <h3 class="box-title">ข้อมูลห้อง</h3>
            </div>
            <div class="pull-right">
                <a href="setroom/create" type="button" class="btn btn-block btn-primary btn-sm"><span
                        class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูลห้อง</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


</section>

@endsection