@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ตารางแสดงรายชื่อวิชา</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  แสดงรายชื่อสาขา
                  <table class="table table-striped">
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสสาขา</th>
                        <th>ชื่อสาขา</th>
                    </tr>
                    @foreach ($majors as $majorss)
                    <tr>
                        <td>{{ $majorss->fac_id}}</td>
                        <td>{{ $majorss->major_id}}</td>
                        <td>{{ $majorss->major_name}}</td>

                    </tr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
