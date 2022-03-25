@extends('admin.layout.master')

@section('content')

<div id="main-wrapper">
    @include('admin.includes.sidebar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ادارة الموظفين</h4>
                    <div class="ml-auto text-left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="{{route('employee')}}">Employee</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn btn-lg btn-dark" href="{{route('employee.create')}}">Create</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employee List</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>م.</th>
                                            <th>الاسم الاول</th>
                                            <th>الاسم الاخير</th>
                                            <th>صورة المستخدم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>رقم الهاتف</th>
                                            <th>العنوان</th>
                                            <th>الجنس</th>
                                            <th>Date of birth</th>
                                            <th>تاريخ التعيين</th>
                                            <th>Job type</th>
                                            <th>City</th>
                                            <th>Salary</th>
                                            <th>Age</th>
                                            <th>الاجراءات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $employee)
                                        <tr>
                                            <th>{{$loop->index+1}}</th>
                                            <td>{{$employee -> first_name}}</td>
                                            <td>{{$employee -> last_name}}</td>
                                            <td><img src="{{ asset('uploads/gallery/' . $employee->image) }}"
                                                    width="80px" height="80px" alt="صورة المستخدم"> </td>
                                            <td>{{$employee -> email}}</td>
                                            <td>{{$employee -> phone}}</td>
                                            <td>{{$employee -> address}}</td>
                                            <td>{{$employee -> gender}}</td>
                                            <td>{{$employee -> dob}}</td>
                                            <td>{{$employee -> join_date}}</td>
                                            <td>{{$employee -> job_type}}</td>
                                            <td>{{$employee -> city}}</td>
                                            <td>{{$employee -> salary}}</td>
                                            <td>{{$employee -> age}}</td>
                                            <td>
                                                <form action="{{route('employee.delete',$employee->id)}}" method="put">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('employee.edit',$employee->id)}}"
                                                        class="btn btn-sm btn-dark">تعديل</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $employees->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection