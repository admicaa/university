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
                <h4 class="page-title">Shift</h4>
                <div class="ml-auto text-left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{route('shift')}}">Shift</a></li>
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
                    <form action="{{route('shift.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Shift</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Shift
                                    type</label>
                                <div class="col-sm-9">
                                    <input type="text" name="shift" class="form-control" id="fname"
                                        placeholder="Enter a shift type">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-dark">اضافة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection