@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">Contact</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab"> Contact</a></li>
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
                                    <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Nomor Telephone</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="no_telp" value="{{ $contact->no_telp }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Email </label>
                                                <input type="text" class="form-control" id="validationCustom01" name="email" value="{{ $contact->email }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Alamat</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="alamat" value="{{ $contact->alamat }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Embed Maps</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="embed" value="{{ $contact->embed }}">
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