@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">Price</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Price</li>
        </ol>
    </div>
</div>
<div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>

<!-- COL-END -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-primary">
                <div class="tab-menu-heading tab-menu-heading-boxed">
                    <div class="tabs-menu-boxed">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Price</a></li>
                            <li><a href="#tab26" data-bs-toggle="tab">Create</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab25">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                        <tr class="text-wrap">
                                            <th class="wd-15p border-bottom-0">Nama Paket</th>
                                            <th class="wd-20p border-bottom-0">harga bulan</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($price as $pro)
                                        <tr>
                                            <td>{{ $pro->nama_paket }}</td>
                                            <td>$ {{ $pro->harga_bulan }} / Month</td>
                                            <td>
                                                <form action="{{ route('price.destroy',$pro->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('price.edit', $pro->id) }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Create -->
                        <div class="tab-pane" id="tab26">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Maaf Ygy ada masalah saat di input!!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('price.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nama Paket :</strong>
                                            <input type="text" name="nama_paket" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Harga Bulan :</strong>
                                            <input type="text" name="harga_bulan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Status :</strong>
                                            <select class="form-control" name="status">
                                                <option disabled selected value="">Pilih Status</option>
                                                <option value="Active">Active</option>
                                                <option value="No Active">No Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Paket Populer :</strong>
                                            <select class="form-control" name="status_populer">
                                                <option disabled selected value="">Pilih Status Populer</option>
                                                <option value="Active">Active</option>
                                                <option value="No Active">No Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- FASILITAS FORM -->
                                    <h1 class="page-title">Fasilitas yang didapati</h1>
                                    <br>

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_4" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_6" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_7" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_8" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_9" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Fasilitas :</strong>
                                            <input type="text" name="fasilitas_10" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COL-END -->

@endsection