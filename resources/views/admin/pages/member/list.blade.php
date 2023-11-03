@extends('admin.index')

@section('job')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách thành viên</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
            <table id="member_table" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Họ & Tên</th>
                        <th>Năm sinh</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Giới tính</th>
                        <th>Đơn vị công tác</th>
                        <th>Tên CLB</th>
                        <th>Điểm hiện tại</th>
                        <th>Điểm thay đổi</th>
                        <th>Thành viên / Khác mời</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $key => $member)
                        <tr>
                            <td style="vertical-align: middle;">
                                {{ $key + 1 }}
                            </td>
                            <td style="vertical-align: middle;">
                                {{ $member->name }} @if (isset($member->nickname))
                                <i><b>({{ $member->nickname }})</b></i>
                                @endif
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->age }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->phone ?? 'Đang cập nhật' }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->email ?? 'Đang cập nhật' }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->is_male ? 'Nam' : 'Nữ' }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->place ?? 'Đang cập nhật' }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->clb_name ?? 'Đang cập nhật' }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->curent_point }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->change_point }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                {{ $member->is_guest ? 'Thành viên' : 'Khách mời' }}
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="{{ route('member.update', $member) }}">Sửa</a> /
                                <a href="#" data-toggle="modal" data-target="#dialogConfrim" class="remove-member"
                                    data-member_id="{{ $member->id }}">Xóa</a>
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
                            <button type="submit" class="btn btn-primary" data-member_id="">Có</button>
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
        $('#member_table').DataTable();

        function removeMember(id) {
            $.ajax({
                type: 'DELETE',
                url: "{{ route('member.delete') }}",
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
            var id = $('.btn.btn-primary').data('member_id');
            removeMember(id);
            $('.btn.btn-danger').trigger('click');
        })

        $('.remove-member').click(function() {
            var id = $(this).data('member_id');
            $('.btn.btn-primary').data('member_id', id);
        })
    </script>
@endsection
