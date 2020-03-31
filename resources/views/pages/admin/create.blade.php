@extends('layouts.admin')

@section('content')
<!-- .app-main -->
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page has-sidebar has-sidebar-expand-xl">
        <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                        </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Add Form Problem </h1>
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <div class="d-xl-none">
                        <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                    </div><!-- .card -->
                    <div id="base-style" class="card">
                        <!-- .card-body -->
                        <div class="card-body">
                        <!-- .form -->
                            <form method="POST" action="{{ route('request_store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <legend>Status Problem</legend>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">User</label>
                                    <input name="user_name" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Subject</label> 
                                    <input name="subject" type="text" class="form-control" placeholder="Input Subject" id="subject" value="{{ old('subject') }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="selDefault">Type</label>
                                    <select class="custom-select" id="selDefault" name="type_name">
                                        <option>-- Select Type --</option>
                                        @foreach($types as $type)
                                        <option value="{{ $type->type_name }}">{{ ($type->type_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tf6">Note</label>
                                    <textarea name="note" class="form-control" id="tf6" rows="3" placeholder="Input Note">{{ old('note') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
                                    <!-- <label for="tf3">File input</label>
                                    <div class="custom-file">
                                    <input name="attachment" type="file" class="custom-file-input" id="tf3" multiple> <label class="custom-file-label" for="tf3">Choose file {{ old('attachment') }}</label>
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Date</label> 
                                    <input name="request_date" type="date" class="form-control" value="{{ old('date') }}" id="date">
                                </div>
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Status {{ old('request_status') }}</label>
                                    </div>
                                    <select class="custom-select" name="request_status" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="Pending">Pending</option>
                                        <option value="On Proccess">On Proccess</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div> -->
                                <div class="form-actions">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                        <!-- .card-body -->
                    </div><!-- /.card -->
                    <hr class="my-5">
                </div><!-- /.page-inner -->
                @include('includes.footermain')
                <!-- .page-sidebar -->
                <div class="page-sidebar page-sidebar-fixed">
                    <!-- .sidebar-header -->
                    <header class="sidebar-header d-xl-none">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                            <a class="prevent-default" href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                            </li>
                        </ol>
                    </header><!-- /.sidebar-header -->
                    <!-- .nav -->
                    <nav id="nav-content" class="nav flex-column mt-4">
                        <a href="#base-style" class="nav-link smooth-scroll">Base style</a> <a href="#labels" class="nav-link smooth-scroll">Labels</a>
                    </nav><!-- /.nav -->
                </div><!-- /.page-sidebar -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </div>
</main><!-- /.app-main -->
@endsection