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
                            <a href="{{ route('view.type') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                        </li>
                        </ol>
                    </nav>
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
                            <form method="POST" action="{{ route('store.type') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <legend>Add Type Trouble</legend>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Type Name</label> 
                                    <input name="type_name" type="text" class="form-control" placeholder="Input Type Name" id="subject" value="{{ old('type_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tf6">Description</label>
                                    <textarea name="description" class="form-control" id="tf6" rows="3" placeholder="Input Description">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                    <button class="btn btn-warning" type="reset">Reset</button>
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