@extends('admin.index')

@section('job')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thành viên mới</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-4">
                        <label>Họ & Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Họ & Tên"
                            value="{{ $data->name }}">
                    </div>
                    <div class="form-group col-2">
                        <label>Tuổi</label>
                        <input type="text" class="form-control" name="age" placeholder="ví dụ: 50"
                            value="{{ $data->age }}">
                    </div>
                    <div class="form-group col-3">
                        <label>Giới tính</label>
                        <select type="text" class="form-control" name="is_male">
                            <option value="0"> Nữ </option>
                            <option value="1" @if ($data->is_male) selected @endif> Nam </option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label>Khách mời / Thành viên</label>
                        <select type="text" class="form-control" name="is_guest">
                            <option value="0"> Thành viên </option>
                            <option value="1" @if ($data->is_guest) selected @endif> Khách mời </option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Ví dụ: 0123456789"
                            value="{{ $data->phone }}">
                    </div>
                    <div class="form-group col-4">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email liên hệ"
                            value="{{ $data->email }}">
                    </div>
                    <div class="form-group col-4">
                        <label>Nick name</label>
                        <input type="text" class="form-control" name="nickname" placeholder="Nick name"
                            value="{{ $data->nickname }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Đơn vị công tác</label>
                        <input type="text" class="form-control" name="place" placeholder="Đơn vị công tác"
                            value="{{ $data->place }}">
                    </div>
                    <div class="form-group col-6">
                        <label>Tên CLB</label>
                        <input type="text" class="form-control" name="clb_name" placeholder="Tên CLB"
                            value="{{ $data->clb_name }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Điểm hiện tại</label>
                        <input type="number" class="form-control" name="curent_point"
                            @if ($data->curent_point >= 0) value="{{ $data->curent_point }}" @else value="0" @endif>
                    </div>

                    <div class="form-group col-6">
                        <label>Điểm thay đổi</label>
                        <input type="number" class="form-control" name="change_point"
                            @if ($data->change_point >= 0) value="{{ $data->change_point }}" @else value="0" @endif>
                    </div>
                </div>

                <div class="form-group">
                    <label>Kỹ năng</label>
                    <textarea type="text" class="form-control" name="ability" placeholder="Kỹ năng" id="ability">
                        {!! htmlspecialchars_decode($data->ability) !!}
                    </textarea>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#dialogConfrim">Submit</button>
            </div>
            <div class="modal fade" id="dialogConfrim" tabindex="-1" role="dialog" aria-labelledby="dialogConfrim"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dialogConfrim">Xác nhận chỉnh sửa, thay đổi nội dung</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc muốn thay đổi những gì bạn đã cập nhật ?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Có
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
                        </div>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('ability', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
    </script>
@endsection
