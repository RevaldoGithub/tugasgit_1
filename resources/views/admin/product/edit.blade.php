@extends('admin.layout')
@section('content')


<div class="page-header">
    <h1 class="page-title">Product</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                            <li><a href="#" class="active">Product</a></li>
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
                                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="image" class="form-label">Image Product</label>
                                                <input type="hidden" name="oldImage" value="{{ $product->image }}">
                                                @if($product->image)
                                                <img src="{{ asset('storage/' . $product->image ) }}" alt="No Image" class="img-fluid mt-3 d-block" style="width: 150px; padding-bottom: 10px; border-radius: 5px;">
                                                @else
                                                @endif
                                                <input class="form-control" type="file" id="image" name="image" value="{{ $product->image }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">Judul</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="judul" value="{{ $product->judul }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">nik mobil</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="nik" value="{{ $product->nik }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">jenis mobil</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="jenis" value="{{ $product->jenis }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">kph mobil</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="kph" value="{{ $product->kph }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Kategori Product</strong>
                                                <select class="form-control" name="kategori">
                                                    @foreach($katepro as $kpr)
                                                    <option value="{{$kpr->id}}" @if ($product->kategori == $kpr->id)selected @endif>{{$kpr->kategori}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Kategori Warna</strong>
                                                <select class="form-control" name="kategori_warna">
                                                    @foreach($katewar as $kawar)
                                                    <option value="{{$kawar->id}}" @if ($product->kategori_warna == $kawar->id)selected @endif>{{$kawar->kategori_warna}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">harga</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="harga" value="{{ $product->harga }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <label for="validationCustom01">harga diskon (tidak wajib di isi)</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="harga_diskon" value="{{ $product->harga_diskon }}">
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Label Baru :</strong>
                                                <select class="form-control" name="label_baru">
                                                    <option @if($product->label_baru == 'Active')selected @endif value="Active">Active</option>
                                                    <option @if($product->label_baru == 'No Active')selected @endif value="No Active">No Active</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Label Hot :</strong>
                                                <select class="form-control" name="label_hot">
                                                    <option @if($product->label_hot == 'Active')selected @endif value="Active">Active</option>
                                                    <option @if($product->label_hot == 'No Active')selected @endif value="No Active">No Active</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <strong>Content:</strong>
                                                <textarea name="content" id="cnt" cols="30" rows="10">{{ $product->content }}</textarea>
                                                <script>
                                                    CKEDITOR.replace('cnt');
                                                </script>
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