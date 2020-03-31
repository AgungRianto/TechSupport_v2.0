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
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="{{ route('view.trouble_ticket') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <div class="page-section">
                    <div class="d-xl-none">
                        <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                    </div>
                    <form class="form-horizontal" action="{{ route('update.user', $requests->id) }}" method="POST">
                        @csrf
                        <div id="base-style" class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Name</label>
                                    <input name="name" type="text" class="form-control" value="{{ ($requests->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="tf6">E-mail</label>
                                    <input name="email" type="text" class="form-control" value="{{ ($requests->email) }}">
                                </div>
                                <div class="form-group">
                                    <label for="tf6">Job Title</label>
                                    <input name="job_title" type="text" class="form-control" value="{{ ($requests->job_title) }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Roles</label> 
                                    <input name="roles" type="text" class="form-control" value="{{ ($requests->roles) }}" id="tfDefault"></input>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr class="my-5">
                </div>
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
</main>
@endsection