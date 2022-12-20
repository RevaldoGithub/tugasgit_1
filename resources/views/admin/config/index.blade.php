@extends('admin.layout')
@section('config')
active
@endsection
@section('content')

<div class="page-header">
    <h1 class="page-title">Config</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Config</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Home Config</a></li>
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
                                    <form action="{{ route('config.update', $config->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Logo</label>
                                                <input type="hidden" name="oldImage" value="{{ $config->logo }}">
                                                @if($config->logo)
                                                <img src="{{ asset('storage/' . $config->logo ) }}" alt="No logo" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="logo" name="logo" value="{{ $config->logo }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Favicon</label>
                                                <input type="hidden" name="oldImage" value="{{ $config->favicon }}">
                                                @if($config->favicon)
                                                <img src="{{ asset('storage/' . $config->favicon ) }}" alt="No favicon" class="img-fluid mt-3 d-block" style="width: 100px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="favicon" name="favicon" value="{{ $config->favicon }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Logo Footer</label>
                                                <input type="hidden" name="oldImage" value="{{ $config->logo_footer }}">
                                                @if($config->logo_footer)
                                                <img src="{{ asset('storage/' . $config->logo_footer ) }}" alt="No logo_footer" class="img-fluid mt-3 d-block" style="width: 200px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="logo_footer" name="logo_footer" value="{{ $config->logo_footer }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Metadata:</strong>
                                                <textarea name="metadata" id="mtda" cols="30" rows="10">{{ $config->metadata }}</textarea>
                                                <script>
                                                    CKEDITOR.replace('mtda');
                                                </script>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Title</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="title" value="{{ $config->title }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" id="" name="email" value="{{ $config->email }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Alamat</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="alamat" value="{{ $config->alamat }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Nomor Hp *Format 62</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="no_telp" value="{{ $config->no_telp }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Facebook</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="fb" value="{{ $config->fb }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Instagram</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="ig" value="{{ $config->ig }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Tiktok</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="tiktok" value="{{ $config->tiktok }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Whatsapp *Format 62</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="wa" value="{{ $config->wa }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Youtube</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="youtube" value="{{ $config->youtube }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Twiter</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="twiter" value="{{ $config->twiter }}">
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