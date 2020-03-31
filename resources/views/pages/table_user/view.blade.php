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
                <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tabel User</a>
            </li>
            </ol>
        </nav><!-- /.breadcrumb -->
        <!-- floating action -->
        <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
        <!-- title and toolbar -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
            <!-- .card -->
            <div class="card card-fluid">
                <!-- .card-header -->
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="mr-auto">Data User</h5>
                        <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-arrow"></div>
                                <a href="#" class="dropdown-item">Edit</a>
                                <a href="#" class="dropdown-item">Archive</a>
                                <a href="#" class="dropdown-item">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <!-- .input-group -->
                        <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                            <select id="filterBy" class="custom-select">
                            <option value='' selected> Filter By </option>
                            <option value="1"> Product </option>
                            <option value="2"> Inventory </option>
                            <option value="3"> Variants </option>
                            <option value="4"> Prices </option>
                            <option value="5"> Sales </option>
                            </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group has-clearable">
                            <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                            <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                            </div><input id="table-search" type="text" class="form-control" placeholder="Search products">
                        </div><!-- /.input-group -->
                        </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                </div>
                <div class="table-responsive">
                <!-- .table -->
                    <table class="table table-hover" id="myTable" aria-describedby="myTable_info" role="grid">
                        <!-- thead -->
                        <thead class="thead-">
                            <tr>
                                <th class="align-middle text-center"> No. </th>
                                <th class="align-middle text-left"> Name </th>
                                <th class="align-middle text-left"> E-mail </th>
                                <th class="align-middle text-left"> Job-Title </th>
                                <th class="align-middle text-center"> Role User </th>
                                <th class="align-middle text-center"> Action </th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            @php(
                            $no = 1 {{-- buat nomor urut --}}
                            )
                            {{-- loop all user --}}
                            @forelse($requests as $request)
                                <tr>
                                    <td class="align-middle text-center"> {{$no++}} </td>
                                    <td class="align-middle text-left"> {{$request->name}} </td>
                                    <td class="align-middle text-left"> {{$request->email}} </td>
                                    <td class="align-middle text-left"> {{$request->job_title}} </td>
                                    <td class="align-middle text-center"> {{$request->roles}} </td>
                                    <td class=" align-middle text-center">
                                        <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/user/show', $request->id) }}">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/destroy/user', $request->id) }}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.table-responsive -->
            </div><!-- /.card -->
        </div>
    </div><!-- /.page-inner -->
    </div><!-- /.page -->
</div><!-- .app-footer -->
@include('includes.footermain')
</main><!-- /.app-main -->
   
@endsection