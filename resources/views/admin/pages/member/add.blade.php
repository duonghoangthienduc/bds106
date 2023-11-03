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
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-4">
                        <label>Họ & Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Họ & Tên">
                    </div>
                    <div class="form-group col-2">
                        <label>Năm sinh</label>
                        <input type="text" class="form-control" name="age" placeholder="ví dụ: 1990">
                    </div>
                    <div class="form-group col-3">
                        <label>Giới tính</label>
                        <select type="text" class="form-control" name="is_male">
                            <option value="0"> Nữ </option>
                            <option value="1"> Nam </option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label>Khách mời / Thành viên</label>
                        <select type="text" class="form-control" name="is_guest">
                            <option value="0"> Thành viên </option>
                            <option value="1"> Khách mời </option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" placeholder="Ví dụ: 0123456789">
                    </div>
                    <div class="form-group col-4">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email liên hệ">
                    </div>
                    <div class="form-group col-4">
                        <label>Nick name</label>
                        <input type="text" class="form-control" name="nickname" placeholder="Nick name">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Đơn vị công tác</label>
                        <input type="text" class="form-control" name="place" placeholder="Đơn vị công tác">
                    </div>
                    <div class="form-group col-6">
                        <label>Tên CLB</label>
                        <input type="text" class="form-control" name="clb_name" placeholder="Tên CLB">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Điểm hiện tại</label>
                        <input type="number" class="form-control" name="curent_point" value="0">
                    </div>
    
                    <div class="form-group col-6">
                        <label>Điểm thay đổi</label>
                        <input type="number" class="form-control" name="change_point" value="0">
                    </div>
                </div>

                <div class="form-group">
                    <label>Kỹ năng</label>
                    <textarea type="text" class="form-control" name="ability" placeholder="Kỹ năng" id="ability"> </textarea>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
