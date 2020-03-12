@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ตารางแสดงรายชื่อนักศึกษา</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ระบบการจัดการข้อมูลนักศึกษา
                  <table class="table table-striped">
                    <tr>
                        <th>รหัสประจำตัว</th>
                        <th>รหัสกลุ่ม</th>
                        <th>คำนำหน้า</th>
                        <th>ชิ่อ</th>
                        <th>นามสกุล</th>
                        <th>สาขา</th>
                        <th>คณะ</th>
                    </tr>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->stu_code}}</td>
                        <td>{{ $student->stu_group_id}}</td>
                        <td>{{ $student->stu_pre}}</td>
                        <td>{{ $student->stu_fname}}</td>
                        <td>{{ $student->stu_lname}}</td>
                        <td>{{ $student->major_id}}</td>
                        <td>{{ $student->fac_id}}</td>

                    </tr>

                    @endforeach </table>
                    {!! $students->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
