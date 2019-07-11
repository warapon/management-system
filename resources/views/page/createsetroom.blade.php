@extends('admintl.layout')

@section('content')
<section class="content-header">
    <h1>
        <i class="fa fa-cogs"></i> จัดการห้อง
        <small>
            <ol class="breadcrumb">
                <li class="active"><a href="{{url('/setroom')}}">เมนูหลัก</a></li>
                <li class="active">เพิ่มข้อมูล</li>
            </ol>
        </small>
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่มข้อมูลห้อง</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label>ชื่อห้อง</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกชื่อห้อง...">
                    </div>
                    <div class="form-group">
                        <label>หมายเลขห้อง</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกหมายเลข...">
                    </div>
                    <div class="form-group">
                        <label>อาคาร</label>
                        <select class="form-control input-sm">
                            <option>-- กรุณาเลือก --</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ชั้น</label>
                        <select class="form-control input-sm">
                            <option>-- กรุณาเลือก --</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ผู้รับผิดชอบ</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกผู้รับผิดชอบ...">
                    </div>
                    <div class="form-group">
                        <label>สภาพห้อง</label>
                        <select class="form-control input-sm">
                            <option>-- กรุณาเลือก --</option>
                            <option>พร้อมใช้งาน</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>อื่นๆ</label>
                        <textarea class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-saved"></span>
                        บันทึก</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">อาคาร</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="กรอกชื่ออาคาร...">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-flat"><span
                                        class="glyphicon glyphicon-saved"></span> บันทึก</button>
                            </span>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Condensed Full Width Table</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <th>ชื่ออาคาร</th>
                                            <th style="width: 20px">#</th>
                                            <th style="width: 20px">#</th>
                                        </tr>
                                        <tr>
                                            <td>Update software</td>
                                            <td>
                                                <button type="button" class="btn btn-block btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-block btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">สภาพห้อง</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="กรอกสถานะสภาพห้อง...">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-flat"><span
                                        class="glyphicon glyphicon-saved"></span> บันทึก</button>
                            </span>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

@endsection