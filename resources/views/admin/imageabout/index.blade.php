@extends('admin.layout')
@section('content')

<div class="page-header">
    <h1 class="page-title">imageabout</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">imageabout</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">imageabout</a></li>
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
                                    <form action="{{ route('imageabout.update', $imageabout->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="image_1" class="form-label">image_1</label>
                                                <input type="hidden" name="oldImage" value="{{ $imageabout->image_1 }}">
                                                @if($imageabout->image_1)
                                                <img src="{{ asset('storage/' . $imageabout->image_1 ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_1" name="image_1" value="{{ $imageabout->image_1 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image_2" class="form-label">image_2</label>
                                                <input type="hidden" name="oldImage" value="{{ $imageabout->image_2 }}">
                                                @if($imageabout->image_2)
                                                <img src="{{ asset('storage/' . $imageabout->image_2 ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_2" name="image_2" value="{{ $imageabout->image_2 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image_3" class="form-label">image_3</label>
                                                <input type="hidden" name="oldImage" value="{{ $imageabout->image_3 }}">
                                                @if($imageabout->image_3)
                                                <img src="{{ asset('storage/' . $imageabout->image_3 ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_3" name="image_3" value="{{ $imageabout->image_3 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image_4" class="form-label">image_4</label>
                                                <input type="hidden" name="oldImage" value="{{ $imageabout->image_4 }}">
                                                @if($imageabout->image_4)
                                                <img src="{{ asset('storage/' . $imageabout->image_4 ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_4" name="image_4" value="{{ $imageabout->image_4 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="image_5" class="form-label">image_5</label>
                                                <input type="hidden" name="oldImage" value="{{ $imageabout->image_5 }}">
                                                @if($imageabout->image_5)
                                                <img src="{{ asset('storage/' . $imageabout->image_5 ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 300px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_5" name="image_5" value="{{ $imageabout->image_5 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
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