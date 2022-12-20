@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">Testimonial</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Home Testimonial</a></li>
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
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-20p border-bottom-0">Nama</th>
                                            <th class="wd-20p border-bottom-0">Company</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($testimonial as $ts)
                                        <tr class="text-wrap">
                                            <td><img src="{{ asset('storage/' . $ts->image ) }}" alt="No Image" class="img-fluid mt-3" style="width: 180px; border-radius: 5px;"></td>
                                            <td>{{ $ts->nama }}</td>
                                            <td>{{ $ts->company }}</td>
                                            <td>
                                                <form action="{{ route('testimonial.destroy',$ts->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('testimonial.edit', $ts->id) }}">
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
                            <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Image</strong>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="image" id="image" onchange="previewImage()">
                                                @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <strong>Nama :</strong>
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <strong>Company :</strong>
                                            <input type="text" name="company" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Content :</strong>
                                            <textarea name="content" id="cnt" cols="30" rows="10"></textarea>
                                            <script>
                                                CKEDITOR.replace('cnt');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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