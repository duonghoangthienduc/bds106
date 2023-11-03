@extends('admin.index')

@section('job')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Chỉnh sửa bài viết</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Tiêu đề bài viết</label>
                        <input type="text" class="form-control" name="name_post" placeholder="Nhập tiêu đề"
                            value="{{ $data->name_post }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Danh mục bài viết</label>
                        <select name="post_cate_id" class="form-control">
                            @forelse ($postCate as $cate)
                                <option value="{{ $cate->id }}" @if ($cate->id == $data->post_cate_id) selected @endif>
                                    {{ $cate->post_cate_name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea type="text" class="form-control" name="short_des" placeholder="Nhập miêu tả ngắn" id="short_des"
                        rows="10" cols="80">{!! htmlspecialchars_decode($data->short_des) !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea type="text" class="form-control" name="post_content" placeholder="Nhập nội dung bài viết" id="post_content"
                        rows="10" cols="80">{!! htmlspecialchars_decode($data->post_content) !!}</textarea>
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
        CKEDITOR.replace('short_des', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
        CKEDITOR.replace('post_content', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        });
    </script>
@endsection
