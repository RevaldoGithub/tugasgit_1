@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">Metametamanagement</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Metametamanagement</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Home Metametamanagement</a></li>
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
                                    <form action="{{ route('metamanagement.update', $metamanagement->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Title:</strong>
                                                <br>
                                                <textarea name="meta_title" id="mt" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_title }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Deskription:</strong>
                                                <textarea name="meta_deskripsi" id="md" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_deskripsi }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Keywords:</strong>
                                                <textarea name="meta_keywords" id="mk" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_keywords }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Serach Engine:</strong>
                                                <textarea name="meta_search_engine" id="mse" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_search_engine }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Website:</strong>
                                                <textarea name="meta_website" id="mw" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_website }}</textarea>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Meta Author:</strong>
                                                <textarea name="meta_author" id="ma" cols="30" rows="5" style="width: 100%; margin: 10px;">{{ $metamanagement->meta_author }}</textarea>
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