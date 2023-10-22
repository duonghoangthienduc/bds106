@extends('admin.index')

@section('job')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách banner</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 10%;">Tiêu đề</th>
                        <th style="width: 30%;">Nội dung</th>
                        <th style="width: 25%;">Hình ảnh</th>
                        <th style="width: 10%;">Thứ tự</th>
                        <th style="width:10%;">Tình trạng</th>
                        <th style="width:10%;">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $key => $data)
                        <tr>
                            <td style="vertical-align: middle;">{{ $data->id }}</td>
                            <td style="vertical-align: middle;">{{ $data->name_banner }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <span class="align-middle"> {{ $data->banner_content }}</span>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <div class="w-25">
                                    <img class="img-thumbnail" src="{{ $data->thumb }}" alt="{{ $data->name_banner }}">
                                </div>

                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <span class="align-middle"> {{ $data->number_sort }}</span>
                            </td>
                            <td style="vertical-align: middle;">
                                @if ($data->is_active == 0)
                                    <span class="badge bg-danger">Không hoạt động</span>
                                @else
                                    <span class="badge bg-success">Hoạt động</span>
                                @endif
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="{{ route('banner.update', $data) }}">Sửa</a> /
                                <a href="#" data-toggle="modal" data-target="#dialogConfrim" class="remove-banner"
                                    data-banner_id="{{ $data->id }}">Xóa</a>
                            </td>
                        </tr>

                    @empty
                    @endforelse
                </tbody>
            </table>
            <div class="modal fade" id="dialogConfrim" tabindex="-1" role="dialog" aria-labelledby="dialogConfrim"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dialogConfrim">Xác nhận chỉnh sửa, thay đổi nội
                                dung
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Dữ liệu xóa không thể khôi phục.
                            Bạn có chắc muốn xóa bản ghi này ?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-banner_id="">Có</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $datas->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function removeBanner(id) {
            $.ajax({
                type: 'DELETE',
                url: "{{ route('banner.delete') }}",
                data: {
                    'id': id
                },
                success: function(res) {
                    if (res.err) {
                        console.log(res.msg)
                    } else {
                        alert(res.msg);
                        location.reload();
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }
        $('.btn.btn-primary').click(function() {
            var id =  $('.btn.btn-primary').data('banner_id');
            removeBanner(id);
            $('.btn.btn-danger').trigger('click');
        })
        $('.remove-banner').click(function() {
            var id = $(this).data('banner_id');
            $('.btn.btn-primary').data('banner_id', id);
        })
    </script>
@endsection
