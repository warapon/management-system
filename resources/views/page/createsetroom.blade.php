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
            <form role="form" method="POST" action="{{url('setroom/store')}}">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="1">
                <div class="box-body">
                    <div class="form-group">
                        <label>ชื่อห้อง</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกชื่อห้อง..." autofocus
                            required>
                    </div>
                    <div class="form-group">
                        <label>หมายเลขห้อง</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกหมายเลข..." required>
                    </div>
                    <div class="form-group">
                        <label>อาคาร</label>
                        <select class="form-control input-sm" required>
                            <option value="">-- กรุณาเลือก --</option>
                            @foreach ($buildings as $building)
                            <option value="{{$building->id}}">{{$building->bd_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ชั้น</label>
                        <select class="form-control input-sm" required>
                            <option value="">-- กรุณาเลือก --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ผู้รับผิดชอบ</label>
                        <input type="text" class="form-control input-sm" placeholder="กรุณากรอกผู้รับผิดชอบ..."
                            required>
                    </div>
                    <div class="form-group">
                        <label>สภาพห้อง</label>
                        <select class="form-control input-sm" required>
                            <option value="">-- กรุณาเลือก --</option>
                            @foreach ($roomconditions as $roomcondition)
                            <option value="{{$roomcondition->id}}">{{$roomcondition->status_room}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>อื่นๆ</label>
                        <textarea class="form-control input-sm" rows="3" placeholder="Enter ..." required></textarea>
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
                <form role="form" method="POST" action="{{url('setroom/store')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="input-group input-group-sm">
                            <input type="hidden" name="type" value="2">
                            <input type="text" name="name_building" class="form-control" placeholder="กรอกชื่ออาคาร..."
                                required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-flat"><span
                                        class="glyphicon glyphicon-saved"></span> บันทึก</button>
                            </span>
                        </div>
                    </div>
                </form>
                <!-- /.box-body -->
                @if (count($buildings) > 0)
                <div class="box-footer">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <th>รายการชื่ออาคาร</th>
                                        <th style="width: 20px"></th>
                                        <th style="width: 20px">#</th>
                                    </tr>
                                    @foreach ($buildings as $building)
                                    <tr>
                                        <td>{{$building->bd_name}}</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-xs"><span
                                                    class="glyphicon glyphicon-edit"></span></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-xs"><span
                                                    class="glyphicon glyphicon-trash"></span></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                @endif
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">สภาพห้อง</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{url('setroom/store')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="input-group input-group-sm">
                            <input type="hidden" name="type" value="3">
                            <input type="text" name="status_room" class="form-control"
                                placeholder="กรอกสถานะสภาพห้อง..." required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success btn-flat"><span
                                        class="glyphicon glyphicon-saved"></span> บันทึก</button>
                            </span>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>


                @if (count($roomconditions) > 0)
                <div class="box-footer">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <th>รายการสภาพห้อง</th>
                                        <th style="width: 20px"></th>
                                        <th style="width: 20px">#</th>
                                    </tr>
                                    @foreach ($roomconditions as $roomcondition)
                                    <tr>
                                        <td>{{$roomcondition->status_room}}</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-xs"
                                                data-toggle="modal" data-target="#exampleModal"
                                                data-data01="{{$roomcondition->id}}"
                                                data-data02="{{$roomcondition->status_room}}"
                                                data-data03="แก้ไขข้อมูลสภาพห้อง"
                                                data-data04="3"><span
                                                    class="glyphicon glyphicon-edit"></span></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-xs"><span
                                                    class="glyphicon glyphicon-trash"></span></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                @endif
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" method="POST" action="{{url('')}}">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{-- <h4 class="modal-title">แก้ไขรายการสภาพห้อง : </h4> --}}
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" class="data01">
                        <input type="hidden" name="type" class="data04">
                        <input type="text" name="status_room" id="text01" class="form-control data02" autofocus
                            required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> ยกเลิก</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> อัพเดท</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</section>
@endsection

@section('script')
<script>
    $('.modal').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        $(this).find('[autofocus]').focus();
        var button = $(event.relatedTarget)
        var data01 = button.data('data01')
        var data02 = button.data('data02')
        var data03 = button.data('data03')
        var data04 = button.data('data04')
        var modal = $(this)
        modal.find('.modal-title').text(data03 + ' : ' + data02)
        modal.find('.data01').val(data01)
        modal.find('.data02').val(data02)
        modal.find('.data04').val(data04)
    })
</script>
@endsection