@extends('admin.index')

@section('job')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cài đặt cấu hình website</h3>
        </div>
        <div class="card-body p-3">
            <form class="pt-3 container" action="{{ route('setting.store') }}" method="POST">
                @csrf
                <div class="row">
                    <input name="type" value="config" hidden>
                    <div class="form-group col-3">
                        <label class="form-label">Tiêu đề</label>
                        <input name="value[name_store]" type="text" class="form-control"
                            value="{{ $settings[0]['value']['name_store'] ?? '' }}">
                    </div>
                    <div class="form-group col-3">
                        <label class="form-label">Email</label>
                        <input name="value[email]" type="email" class="form-control"
                            value="{{ $settings[0]['value']['email'] ?? '' }}">
                    </div>
                    <div class="form-group col-3">
                        <label class="form-label">Số điện thoại</label>
                        <input name="value[phone]" class="form-control" value="{{ $settings[0]['value']['phone'] ?? '' }}">
                    </div>
                    <div class="form-group col-3">
                        <label class="form-label">Fax</label>
                        <input name="value[fax]" class="form-control" value="{{ $settings[0]['value']['fax'] ?? '' }}">
                    </div>
                    <div class="form-group col-4">
                        <label class="form-label">Địa chỉ</label>
                        <textarea name="value[address]" type="text" class="form-control">{{ $settings[0]['value']['address'] ?? '' }}</textarea>
                    </div>
                    <div class="form-group col-4">
                        <label class="form-label">Địa chỉ iframe google map</label>
                        <textarea name="value[iframe_ggmap]" type="text" class="form-control">{{ $settings[0]['value']['iframe_ggmap'] ?? '' }}</textarea>
                    </div>
                    <div class="form-group col-4">
                        <label class="form-label">Mã nhúng youtube</label>
                        <textarea name="value[iframe_youtube]" type="text" class="form-control">{{ $settings[0]['value']['iframe_youtube'] ?? '' }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
@endsection
