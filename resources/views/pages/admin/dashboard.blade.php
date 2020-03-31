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
                    <h1 class="page-title"> Dashboard </h1>
                    @if(Auth::user()->roles == 'USER')
                    <a href="{{ route('request_create') }}" type="button" class="btn btn-primary pull-right" method="POST">Add Trouble Ticket</a>
                    @endif
                </header><!-- /.page-title-bar -->
                <!-- .page-section -->
                @forelse ($requests as $request)
                    <div class="page-section">
                        <div class="d-xl-none">
                            <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                        </div><!-- .card -->
                        <div id="base-style" class="card">
                            <!-- .card-body -->
                            <div class="card-body">
                            <!-- .form -->
                                    <legend>Trouble Ticket : {{ $request->id }}</legend>
                                    <label class="col-form-label" for="tfDefault">Sender : {{ ($request->user_name) }}</label>
                                    <div class="form-group">
                                        <label class="col-form-label" for="tfDefault">Subject</label>
                                        <input type="text" class="form-control" value="{{ ($request->subject) }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="tfDefault">Type</label>
                                        <input type="text" class="form-control" value="{{ ($request->type_name) }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tf6">Note</label>
                                        <textarea class="form-control" id="tf6" rows="3" readonly>{{ ($request->note) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-success" type="button" href="{{ asset('public/storage/'. $request->attachment) }}">Download File</a><a> {{ $request->attachment }}</a>
                                        <!-- <button href="{{ $request->attachment }}">Download File</button> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="tfDefault">Date</label> 
                                        <input type="text" class="form-control" placeholder="{{ ($request->request_date) }}" id="tfDefault" readonly>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="col-form-label" for="tfDefault">Status</label> 
                                            <input type="text" class="form-control" placeholder="{{ ($request->request_status) }}" id="tfDefault" readonly>
                                        </div>
                                        @if(Auth::user()->roles == 'USER')
                                        <div class="form-group">
                                            <label class="col-form-label" for="tfDefault">Officer</label> 
                                            <input name="officer" type="text" class="form-control" value="{{ ($request->officer) }}" id="tfDefault" readonly>
                                        </div>
                                        @endif
                                    </div>
                                    @if(Auth::user()->roles == 'ADMIN')
                                    <form action="{{ route('request_update', $request->id) }}" method="POST">
                                        @csrf
                                        
                                        @if($request->request_status == 'Pending')
                                            <input name="request_status" class="btn btn-primary" id="request_status" type="submit" value="On Proccess"></input>
                                            <div class="form-group">
                                                <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                            </div>
                                        @elseif($request->request_status == 'On Proccess')
                                            <input name="request_status" class="btn btn-info" id="request_status" type="submit" value="Done"></input>
                                            <div class="form-group">
                                                <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                            </div>
                                        @elseif($request->request_status == 'Done')
                                            <div class="form-group">
                                                <input name="officer" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                            </div>
                                        @endif
                                    </form>
                                    @endif

                                <form method="POST" action="{{ route('store.comment') }}">
                                @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <figure class="user-avatar user-avatar-md mr-2">
                                                </figure>
                                                <div class="media-body">
                                                    <div class="publisher keep-focus focus">
                                                        @foreach($request->detail_comment as $dc)
                                                            <!-- <span class="comment-date">{{ $dc->user_name }}</span>
                                                            <span class="comment-date">{{ $dc->created_at }}</span>
                                                            <div class="publisher-input">
                                                                <textarea name="comment" id="publisherInput5" class="form-control" placeholder="" readonly>{{ $dc->comment}}</textarea>
                                                            </div> -->

                                                            <div class="media border p-3 mb-2">
                                                                <figure class="user-avatar user-avatar-md mr-2">
                                                                    <img src="{{ url('frontend/images/comment.png') }}" alt="">
                                                                </figure>
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <h6><b>{{ $dc->user_name }}</b> <small> Posted on <i>{{ $dc->created_at }}</i></small></h6>
                                                                            <p>{{ $dc->comment}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <label for="publisherInput5" class="publisher-label">State: Always open</label>
                                                        <div class="form-group">
                                                            <input name="request_id" type="hidden" class="form-control" value="{{ $request->id }}" id="tfDefault" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="user_name" type="hidden" class="form-control" value="{{ Auth::user()->name }}" id="tfDefault" readonly>
                                                        </div>

                                                        <div class="publisher-input">
                                                            <textarea name="comment" id="publisherInput5" class="form-control" placeholder="Write a comment"></textarea>
                                                        </div> 
                                                        <div class="publisher-actions">
                                                            <div class="publisher-tools mr-auto">
                                                            <div class="btn btn-light btn-icon fileinput-button">
                                                                <i class="fa fa-paperclip"></i> <input type="file" id="attachment5" name="attachment5[]" multiple>
                                                            </div><button type="button" class="btn btn-light btn-icon"><i class="far fa-smile"></i></button>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Publish</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="my-5">
                    </div>
                @empty
                    <tr>
                        <td class="text-center">
                            <h4 class="text-center" style="color: rgb(65, 105, 225)">--Data Kosong--</h4>
                        </td>
                    </tr>
                @endforelse
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