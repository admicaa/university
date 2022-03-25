@extends('admin.layout.master')

@section('content')

<div id="main-wrapper">

    @include('admin.includes.sidebar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                    <div class="ml-auto text-left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">التقويم</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <h4 class="page-title">التقويم</h4>
            <div class="jumbotron">
                <div class="row">
                    @can('isAdmin')
                    <a href="{{url('calendar/add')}}" class="btn btn-success">اضافة حدث</a>
                    @endcan
                    {{--<a href="{{url('calendar/edit')}}" class="btn btn-warning">تعديل events</a>--}}
                    {{--<a href="#" class="btn btn-danger">حذف events</a>--}}
                </div><br>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: #2e642e; color: white">
                                Full calendar
                            </div>
                            <div class="panel-body">
                                {!! $calendar->calendar() !!}
                                {!! $calendar->script() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection