@extends('admin.layout.master')

@section('content')

@include('admin.includes.sidebar')

<div class="page-wrapper">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">ادارة المستخدمين</h4>
                <div class="ml-auto text-left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user')}}">User</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <form action="{{route('user.update',$user->id)}}" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        {{--@method('PUT')--}}
                        <div class="card-body">
                            <h4 class="card-title">Add Admin</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">اسم
                                    المستخدم</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control" id="username"
                                        value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">اختر
                                    ملف</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input"
                                            value="{{$user->image}}">
                                        <label class="custom-file-label">{{$user->image}}</label>
                                        {{--<div class="invalid-feedback">Example invalid custom file feedback</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">الاسم
                                    الاول</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        value="{{$user->first_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">الاسم
                                    الاخير</label>
                                <div class="col-sm-9">
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        value="{{$user->last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname"
                                    class="col-sm-3 text-left control-label col-form-label">الصلاحية</label>
                                <div class="col-sm-9">
                                    {{--<select type="text" name="role" class="form-control" id="lname"
                                        value="{{$user->role}}">--}}
                                        <select type="text" name="role" class="form-control" id="lname">
                                            {{--<option value="admin">Admin</option>--}}
                                            {{--<option value="employee">Employee</option>--}}
                                            <option value="admin" {{$user->role ==='admin' ?'selected' :''}}>مدير
                                            </option>
                                            <option value="employee" {{$user->role ==='employee' ?'selected' :''}}>موظف
                                            </option>
                                        </select>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-sm-3 text-left control-label col-form-label">Salary</label>
                                <div class="col-sm-9">
                                    <input type="number" name="salary" class="form-control" value="{{$user->salary}}">
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">البريد
                                    الالكتروني</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="form-control" id="lname"
                                        value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 text-left control-label col-form-label">رقم
                                    الهاتف</label>
                                <div class="col-sm-9">
                                    <input type="number" name="phone" class="form-control" id="phone"
                                        value="{{$user->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                    class="col-sm-3 text-left control-label col-form-label">العنوان</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control" id="address"
                                        value="{{$user->address}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender"
                                    class="col-sm-3 text-left control-label col-form-label">الجنس</label>
                                <div class="col-sm-9">
                                    <select type="text" name="gender" class="form-control" id="gender"
                                        value="{{$user->gender}}">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">تاريخ
                                    الميلاد</label>
                                <div class="col-sm-9">
                                    <input type="date" name="dob" class="form-control" id="dob" value="{{$user->dob}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="joindate" class="col-sm-3 text-left control-label col-form-label">تاريخ
                                    التعيين</label>
                                <div class="col-sm-9">
                                    <input type="date" name="join_date" class="form-control" id="join_date"
                                        value="{{$user->join_date}}">
                                </div>
                            </div>









                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-dark">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection