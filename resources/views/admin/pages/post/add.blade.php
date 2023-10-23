@extends('admin.index')

@section('job')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Bài viết mới</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Tiêu đề bài viết</label>
                        <input type="text" class="form-control" name="name_post" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Danh mục bài viết</label>
                        <select name="post_cate_id" class="form-control">
                            @forelse ($postCate as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->post_cate_name }}</option>
                            @empty
                                
                            @endforelse
                           
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea type="text" class="form-control" name="short_des" placeholder="Nhập miêu tả ngắn" id="short_des"
                        rows="10" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea type="text" class="form-control" name="post_content" placeholder="Nhập nội dung bài viết" id="post_content"
                        rows="10" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="thumb">
                </div>
                <div class="form-check">
                    <input type="radio" id="active" name="is_active" class="form-check-input" value="1" checked>
                    <label class="form-check-label" for="active">Kích hoạt</label>
                    <br>
                    <input type="radio" id="non-active" name="is_active" class="form-check-input" value="0">
                    <label class="form-check-label" for="non-active">Tắt</label>
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
    CKEDITOR.replace('short_des');
    CKEDITOR.replace('post_content');
</script>
@endsection