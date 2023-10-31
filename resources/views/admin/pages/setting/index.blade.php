@extends('admin.index')

@section('job')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Setting</h3>
        </div>
        <div class="card-body p-3">
            <form class="pt-3 container">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email address</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone number 1</label>
                    <div class="col-sm-10">
                        <input name="phone_num1" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone number 2</label>
                    <div class="col-sm-10">
                        <input name="phone_num2" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
@endsection
