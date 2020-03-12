@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ตารางแสดงรายชื่อคณะ</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  แสดงรายชื่อคณะ
                  <table class="table table-striped">
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสคณะ</th>
                        <th>รายชื่อคณะ</th>
                    </tr>
                    @foreach ($facultys as $facultyss)
                    <tr>
                        <td>{{ $facultyss->id}}</td>
                        <td>{{ $facultyss->fac_id}}</td>
                        <td>{{ $facultyss->fac_name}}</td>

                    </tr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
