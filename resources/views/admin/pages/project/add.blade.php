@extends('admin.index')

@section('job')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dự án mới</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label>TÊN DỰ ÁN</label>
                    <input type="text" class="form-control" name="name_project" placeholder="Nhập tiêu đề">
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>ĐƠN GIÁ</label>
                        <input type="number" min="0" class="form-control" name="price" placeholder="Nhập giá tiền">
                    </div>

                    <div class="form-group col-md-4">
                        <label>GIÁ TRỊ</label>
                        <select class="form-control" name="value" id="">
                            <option value="ty">Tỷ</option>
                            <option value="trieu">Triệu</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>ĐƠN VỊ TÍNH</label>
                        <select class="form-control" name="unit" id="">
                            <option value="can"> Căn </option>
                            <option value="m2"> m2 </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>TỔNG QUAN DỰ ÁN</label>
                    <textarea type="text" class="form-control" name="content" placeholder="Nhập miêu tả" id="content" rows="10"
                        cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>VỊ TRÍ DỰ ÁN</label>
                    <textarea type="text" class="form-control" name="location" placeholder="Nhập miêu tả" id="location" rows="10"
                        cols="80"></textarea>
                </div>

                <div class="form-group">
                    <label>TIỆN ÍCH</label>
                    <textarea type="text" class="form-control" name="convince" placeholder="Nhập miêu tả" id="convince" rows="10"
                        cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>NỘI THẤT</label>
                    <textarea type="text" class="form-control" name="decor" placeholder="Nhập miêu tả" id="decor" rows="10"
                        cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>TIẾN ĐỘ</label>
                    <textarea type="text" class="form-control" name="payment" placeholder="Nhập miêu tả" id="payment" rows="10"
                        cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>MẶT BẰNG</label>
                    <textarea type="text" class="form-control" name="place" placeholder="Nhập miêu tả" id="place" rows="10"
                        cols="80"></textarea>
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
        CKEDITOR.replace('content');
        CKEDITOR.replace('location');
        CKEDITOR.replace('convince');
        CKEDITOR.replace('decor');
        CKEDITOR.replace('payment');
        CKEDITOR.replace('place');
    </script>
@endsection
