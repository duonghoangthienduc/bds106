@extends('admin.index')

@section('job')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa dự án</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>TÊN DỰ ÁN</label>
                    <input type="text" class="form-control" name="name_project" placeholder="Nhập tiêu đề"
                        value="{{ $data->name_project }}">
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>ĐƠN GIÁ</label>
                        <input type="number" min="0" class="form-control" name="price" placeholder="Nhập giá tiền"
                            value="{{ $data->price }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label>GIÁ TRỊ</label>
                        <select class="form-control" name="value" id="">
                            <option value="ty">Tỷ</option>
                            <option value="trieu" @if ($data->value == 'trieu') selected @endif>Triệu</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>ĐƠN VỊ TÍNH</label>
                        <select class="form-control" name="unit" id="">
                            <option value="can"> Căn </option>
                            <option value="m2" @if ($data->value == 'm2') selected @endif> m2 </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>TỔNG QUAN DỰ ÁN</label>
                    <textarea type="text" class="form-control" name="content" placeholder="Nhập miêu tả" id="content" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->content) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>VỊ TRÍ DỰ ÁN</label>
                    <textarea type="text" class="form-control" name="location" placeholder="Nhập miêu tả" id="location" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->location) !!}</textarea>
                </div>

                <div class="form-group">
                    <label>TIỆN ÍCH</label>
                    <textarea type="text" class="form-control" name="convince" placeholder="Nhập miêu tả" id="convince" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->convince) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>NỘI THẤT</label>
                    <textarea type="text" class="form-control" name="decor" placeholder="Nhập miêu tả" id="decor" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->decor) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>TIẾN ĐỘ</label>
                    <textarea type="text" class="form-control" name="payment" placeholder="Nhập miêu tả" id="payment" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->payment) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>MẶT BẰNG</label>
                    <textarea type="text" class="form-control" name="place" placeholder="Nhập miêu tả" id="place" rows="10"
                        cols="80">{!! htmlspecialchars_decode($data->place) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="thumb">
                    @if (isset($data->thumb))
                        <img class="w-25" src="{{ $data->thumb }}">
                        <input hidden name="img_category" value="{{ $data->thumb }}">
                    @endif
                </div>
                <div class="form-check">
                    <input type="radio" @if ((int) $data->is_active == 1) checked @endif id="active" name="is_active"
                        class="form-check-input" value="1">
                    <label class="form-check-label" for="active">Kích hoạt</label>
                    <br>
                    <input type="radio" @if ((int) $data->is_active == 0) checked @endif id="non-active" name="is_active"
                        class="form-check-input" value="0">
                    <label class="form-check-label" for="non-active">Tắt</label>
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
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('location', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('convince', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('decor', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('payment', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('place', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
    </script>
@endsection
