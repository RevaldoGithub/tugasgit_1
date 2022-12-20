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
<!-- COL-END -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-primary">
                <div class="tab-menu-heading tab-menu-heading-boxed">
                    <div class="tabs-menu-boxed">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li><a href="#" class="active">Price</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab25">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
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
                                    <form action="{{ route('price.update', $price->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Nama Paket</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="nama_paket" value="{{ $price->nama_paket }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">harga bulan</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="harga_bulan" value="{{ $price->harga_bulan }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <strong>Status :</strong>
                                                <select class="form-control" name="status">
                                                    <option @if($price->status == 'Active')selected @endif value="Active">Active</option>
                                                    <option @if($price->status == 'No Active')selected @endif value="No Active">No Active</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <strong>Paket Popular :</strong>
                                                <select class="form-control" name="status_populer">
                                                    <option @if($price->status_populer == 'Active')selected @endif value="Active">Active</option>
                                                    <option @if($price->status_populer == 'No Active')selected @endif value="No Active">No Active</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <!-- FASILITAS FORM -->
                                            <h1 class="page-title">Fasilitas yang didapati</h1>
                                            <br>

                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_1" value="{{ $price->fasilitas_1 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_2" value="{{ $price->fasilitas_2 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_3" value="{{ $price->fasilitas_3 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_4" value="{{ $price->fasilitas_4 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_5" value="{{ $price->fasilitas_5 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_6" value="{{ $price->fasilitas_6 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_7" value="{{ $price->fasilitas_7 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_8" value="{{ $price->fasilitas_8 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_9" value="{{ $price->fasilitas_9 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Fasilitas</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fasilitas_10" value="{{ $price->fasilitas_10 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- COL-END -->

@endsection