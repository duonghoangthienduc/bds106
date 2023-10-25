@extends('admin.index')

@section('job')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách dự án</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
            <table id="project_table" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 10%;">Tiêu đề</th>
                        <th style="width: 25%;">Hình ảnh</th>
                        <th style="width:10%;">Tình trạng</th>
                        <th style="width: 10%;">Ngày tạo</th>
                        <th style="width:10%;">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $key => $project)
                        <tr>
                            <td style="vertical-align: middle;">{{ $key + 1 }}</td>
                            <td style="vertical-align: middle;">{{ $project->name_project }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <div class="w-25">
                                    <img class="img-thumbnail" src="{{ $project->thumb }}" alt="{{ $project->name_project }}">
                                </div>
                            </td>
                            <td style="vertical-align: middle;">
                                @if ($project->is_active == 0)
                                    <span class="badge bg-danger">Không hoạt động</span>
                                @else
                                    <span class="badge bg-success">Hoạt động</span>
                                @endif
                            </td>
                            <td style="vertical-align: middle;">
                                {{ $project->created_at }}
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="{{ route('project.update', $project) }}">Sửa</a> /
                                <a href="#" data-toggle="modal" data-target="#dialogConfrim" class="remove-banner"
                                    data-project_id="{{ $project->id }}">Xóa</a>
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
                            <h5 class="modal-title" id="dialogConfrim">Xác nhận chỉnh sửa, thay đổi nội dung
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
                            <button type="submit" class="btn btn-primary" data-project_id="">Có</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Không</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script>
        $('#project_table').DataTable();

        function removeProject(id) {
            $.ajax({
                type: 'DELETE',
                url: "{{ route('project.delete') }}",
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
            var id = $('.btn.btn-primary').data('project_id');
            removeProject(id);
            $('.btn.btn-danger').trigger('click');
        })

        $('.remove-banner').click(function() {
            var id = $(this).data('project_id');
            $('.btn.btn-primary').data('project_id', id);
        })
    </script>
@endsection
