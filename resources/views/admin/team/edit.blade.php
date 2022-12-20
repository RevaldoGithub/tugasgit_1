@extends('admin.layout')
@section('content')


<div class="page-header">
    <h1 class="page-title">Team</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Team</li>
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
                            <li><a href="#" class="active">Team</a></li>
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
                                    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">team</label>
                                                <input type="hidden" name="oldImage" value="{{ $team->image }}">
                                                @if($team->image)
                                                <img src="{{ asset('storage/' . $team->image ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image" name="image" value="{{ $team->image }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Nama Team</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="nama" value="{{ $team->nama }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Posisi</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="posisi" value="{{ $team->posisi }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <br>
                                        <h5>Link Sosial Media (tidak wajib di isi)</h5>
                                        <br>
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Facebook</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fb" value="{{ $team->fb }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Twitter</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="twiter" value="{{ $team->twiter }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Youtube</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="youtube" value="{{ $team->youtube }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Tiktok</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="tiktok" value="{{ $team->tiktok }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Instagram</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="ig" value="{{ $team->ig }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Whatsapp</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="wa" value="{{ $team->wa }}">
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
<!-- COL-END -->

@endsection