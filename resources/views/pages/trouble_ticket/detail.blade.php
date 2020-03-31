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
                    <div id="base-style" class="card">
                        <div class="card-body">
                                <legend>Trouble Ticket : {{ $request->id }}</legend>
                                <label class="col-form-label" for="tfDefault">Sender : {{ ($request->user_name) }}</label>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Subject</label>
                                    <input type="text" class="form-control" value="{{ ($request->subject) }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tf6">Note</label>
                                    <textarea class="form-control" id="tf6" rows="3" readonly>{{ ($request->note) }}</textarea>
                                </div>
                                <div class="form-group">
                                <a class="btn btn-success" type="button" href="{{ asset('public/storage/'. $request->attachment) }}">Download File</a><a> {{ $request->attachment }}</a>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="tfDefault">Date</label> 
                                    <input type="text" class="form-control" value="{{ ($request->request_date) }}" id="tfDefault" readonly>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="col-form-label" for="tfDefault">Officer</label> 
                                        <input name="officer" type="text" class="form-control" value="{{ ($request->officer) }}" id="tfDefault" readonly>
                                    </div>
                                    <div>
                                        <label class="col-form-label" for="tfDefault">Status</label> 
                                        <input type="text" class="form-control" value="{{ ($request->request_status) }}" id="tfDefault" readonly>
                                    </div>
                                </div>
                                @if(Auth::user()->roles == 'ADMIN')
                                <form action="{{ route('update_detail.trouble_ticket', $request->id) }}" method="POST">
                                    @csrf
                                    
                                    @if($request->request_status == 'Pending')
                                        <input name="request_status" class="btn btn-primary" id="request_status" type="submit" value="On Proccess"></input>
                                        <div class="form-group">
                                            <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                        </div>
                                    @elseif($request->request_status == 'On Proccess')
                                        <input name="request_status" class="btn btn-info" id="request_status" type="submit" value="Finish"></input>
                                        <div class="form-group">
                                            <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                        </div>
                                    @elseif($request->request_status == 'Finish')
                                        <div class="form-group">
                                            <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                        </div>
                                    @endif
                                </form>
                                @endif
                        </div>
                    </div>
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