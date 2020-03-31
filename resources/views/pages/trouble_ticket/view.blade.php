@extends('layouts.admin')

@section('content')

<main class="app-main">
<!-- .wrapper -->
<div class="wrapper">
    <!-- .page -->
    <div class="page">
    <!-- .page-inner -->
    <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar">
        <!-- .breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trouble Ticket</a>
            </li>
            </ol>
        </nav><!-- /.breadcrumb -->
        <!-- floating action -->
        <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
        <!-- title and toolbar -->
        <div class="d-md-flex align-items-md-start">
            <h1 class="page-title mr-sm-auto"> Data Trouble Ticket </h1><!-- .btn-toolbar -->
            <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
        </div><!-- /title and toolbar -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
        <!-- .card -->
            <div class="card card-fluid">
                <!-- .card-header -->
                <div class="card-header">
                <!-- .nav-tabs -->
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab1">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#">On Proccess</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#">Finish</a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                <!-- .form-group -->
                    <div id="myTable2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="myTable2_length">
                                    <label>Show <select name="myTable2_length" aria-controls="myTable2" class="custom-select">
                                        <option value="10">10</option><option value="25">25</option>
                                        <option value="50">50</option><option value="100">100</option>
                                    </select> entries</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="myTable2_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control" placeholder="" aria-controls="myTable2">
                                    </label>
                                </div>
                            </div>
                        </div>
                    <!-- .table -->
                    <table id="myTable" class="table dataTable no-footer" aria-describedby="myTable_info" role="grid">
                        <!-- thead -->
                        <thead class="thead-light">
                            <tr role="row">
                                <th colspan="1" style="min-width: 20px;" rowspan="1">
                                    <div class="thead-dd dropdown">
                                        <span class="custom-control custom-control-nolabel custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check-handle">
                                            <label class="custom-control-label" for="check-handle"></label>
                                        </span>
                                        <div class="thead-btn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-arrow"></div>
                                            <a class="dropdown-item" href="#">Select all</a>
                                            <a class="dropdown-item" href="#">Unselect all</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Bulk remove</a>
                                            <a class="dropdown-item" href="#">Bulk edit</a>
                                            <a class="dropdown-item" href="#">Separate actions</a>
                                        </div>
                                    </div>
                                </th>
                                <th role="row"> No. </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Sender : activate to sort column descending" aria-sort="ascending"> Sender </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Subject : activate to sort column descending" aria-sort="ascending"> Subject </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Subject : activate to sort column descending" aria-sort="ascending"> Type </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Note : activate to sort column ascending"> Note  </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Date : activate to sort column ascending"> Date </th>
                                <th class="align-middle sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label=" Status : activate to sort column ascending"> Status </th>
                                <th style="width:100px; min-width:100px;" class="align-middle text-center sorting_disabled" rowspan="1" colspan="1" aria-label=" &amp;nbsp; "> &nbsp; Action</th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                        @php(
                        $no = 1 {{-- buat nomor urut --}}
                        )
                        {{-- loop all user --}}
                        @forelse($requests as $request)
                            <tr role="row" class="odd">
                                <td class=" col-checker align-middle">
                                    <div class="custom-control custom-control-nolabel custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="" value="">
                                        <label class="custom-control-label" for=""></label>
                                    </div>
                                </td>
                                <td class="align-middle">{{ $no++ }}</td>
                                <td class="align-middle">
                                    <a href="#">{{ $request->user_name }}</a>
                                </td>
                                <td class="align-middle sorting_1">{{ $request->subject }}</td>
                                <td class="align-middle sorting_1">{{ $request->type_name }}</td>
                                <td class="align-middle">{{ $request->note }}</td>
                                <td class="align-middle">{{ $request->request_date }}</td>
                                <td class=" align-middle">
                                    @if($request->request_status == 'Pending')
                                        <span class="badge badge-subtle badge-danger">{{ $request->request_status }}</span>
                                    @elseif($request->request_status == 'On Proccess')
                                        <span class="badge badge-subtle badge-warning">{{ $request->request_status }}</span>
                                    @elseif($request->request_status == 'Done')
                                        <span class="badge badge-subtle badge-success">{{ $request->request_status }}</span>
                                    @endif
                                </td>
                                <td class=" align-middle text-right">
                                    <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/detail_ticket', $request->id) }}">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/destroy', $request->id) }}">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                        </tbody><!-- /tbody -->
                    </table>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
            <hr class="my-5">
            <!-- .card -->
        </div><!-- /.page-section -->
    </div><!-- /.page-inner -->
    </div><!-- /.page -->
</div><!-- .app-footer -->
@include('includes.footermain')
</main><!-- /.app-main -->
   
@endsection