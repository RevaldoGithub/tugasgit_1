@extends('admin.layout')
@section('bgb')
active
@endsection
@section('content')

<div class="page-header">
    <h1 class="page-title">Meta Image</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Meta Image</li>
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
                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Meta Image</a></li>
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
                                    <form action="{{ route('bgbanner.update', $bgbanner->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->bg_banner }}">
                                                @if($bgbanner->bg_banner)
                                                <img src="{{ asset('storage/' . $bgbanner->bg_banner ) }}" alt="No bg_banner" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="bg_banner" name="bg_banner" value="{{ $bgbanner->bg_banner }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_why_1 }}">
                                                @if($bgbanner->image_why_1)
                                                <img src="{{ asset('storage/' . $bgbanner->image_why_1 ) }}" alt="No image_why_1" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_why_1" name="image_why_1" value="{{ $bgbanner->image_why_1 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_why_2 }}">
                                                @if($bgbanner->image_why_2)
                                                <img src="{{ asset('storage/' . $bgbanner->image_why_2 ) }}" alt="No image_why_2" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_why_2" name="image_why_2" value="{{ $bgbanner->image_why_2 }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_benefit }}">
                                                @if($bgbanner->image_benefit)
                                                <img src="{{ asset('storage/' . $bgbanner->image_benefit ) }}" alt="No image_benefit" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_benefit" name="image_benefit" value="{{ $bgbanner->image_benefit }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_footer }}">
                                                @if($bgbanner->image_footer)
                                                <img src="{{ asset('storage/' . $bgbanner->image_footer ) }}" alt="No image_footer" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_footer" name="image_footer" value="{{ $bgbanner->image_footer }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_skill }}">
                                                @if($bgbanner->image_skill)
                                                <img src="{{ asset('storage/' . $bgbanner->image_skill ) }}" alt="No image_skill" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_skill" name="image_skill" value="{{ $bgbanner->image_skill }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_blog_right }}">
                                                @if($bgbanner->image_blog_right)
                                                <img src="{{ asset('storage/' . $bgbanner->image_blog_right ) }}" alt="No image_blog_right" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_blog_right" name="image_blog_right" value="{{ $bgbanner->image_blog_right }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_service }}">
                                                @if($bgbanner->image_service)
                                                <img src="{{ asset('storage/' . $bgbanner->image_service ) }}" alt="No image_service" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_service" name="image_service" value="{{ $bgbanner->image_service }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Meta Image</label>
                                                <input type="hidden" name="oldImage" value="{{ $bgbanner->image_sejarah }}">
                                                @if($bgbanner->image_sejarah)
                                                <img src="{{ asset('storage/' . $bgbanner->image_sejarah ) }}" alt="No image_sejarah" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image_sejarah" name="image_sejarah" value="{{ $bgbanner->image_sejarah }}">
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