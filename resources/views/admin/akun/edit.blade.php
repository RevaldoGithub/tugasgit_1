@extends('admin.layout')
@section('content')


<div class="page-header">
    <h1 class="page-title">Edit Account</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
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
                            <li><a href="/akun" class="active">Edit Akun</a></li>
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
                                    <form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Username</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="username" value="{{ $akun->username }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom01">Email</label>
                                                <input type="email" class="form-control" id="validationCustom01" name="email" value="{{ $akun->email }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 mb-3">
                                                <strong>Role :</strong>
                                                <select class="form-control" name="role">
                                                    <option @if($akun->role == 'Superadmin')selected @endif value="Superadmin">Superadmin</option>
                                                    <option @if($akun->role == 'Admin')selected @endif value="Admin">Admin</option>
                                                    <option @if($akun->role == 'Operator')selected @endif value="Operator">Operator</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="validationCustom05">Password</label>
                                                <input type="text" class="form-control" id="validationCustom05" name="password">
                                                <div class="invalid-feedback">Please provide a valid zip.</div>
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