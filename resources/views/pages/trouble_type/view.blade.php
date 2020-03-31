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
                <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Type Trouble</a>
            </li>
            </ol>
        </nav><!-- /.breadcrumb -->
        <!-- floating action -->
        <button type="button" class="btn btn-success btn-floated"><a href="{{ route('create.type') }}"><span class="fa fa-plus"></span></a></button> <!-- /floating action -->
        <!-- title and toolbar -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
            <!-- .card -->
            <div class="card card-fluid">
                <!-- .card-header -->
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="mr-auto">Data Type Trouble</h5>
                        <div class="btn">
                            <a href="{{ route('create.type') }}" type="button" class="next btn btn-primary ml-auto">Add Type</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                <!-- .table -->
                    <table class="table table-hover" id="myTable" aria-describedby="myTable_info" role="grid">
                        <!-- thead -->
                        <thead class="thead-light">
                            <tr>
                                <th class="align-middle text-center"> No. </th>
                                <th class="align-middle text-left"> Type Name </th>
                                <th class="align-middle text-left"> Description </th>
                                <th class="align-middle text-center"> Action </th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            @php(
                            $no = 1 {{-- buat nomor urut --}}
                            )
                            {{-- loop all types --}}
                            @forelse($types as $type)
                                <tr>
                                    <td class="align-middle text-center"> {{$no++}} </td>
                                    <td class="align-middle text-left"> {{$type->type_name}} </td>
                                    <td class="align-middle text-left"> {{$type->description}} </td>
                                    <td class=" align-middle text-center">
                                        <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/type/show', $type->id) }}">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-icon btn-secondary" href="{{ URL('/admin/destroy/type', $type->id) }}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
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