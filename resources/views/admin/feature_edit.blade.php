@extends('admin.layout.app')

@section('heading', 'Edit Feature')

@section('right_top_button')
    <div class="ml-auto">
        <a href="{{ route('admin_feature_view') }}" class="btn btn-primary"><i class="fa fa-plus"></i> View All</a>
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_feature_update', $feature_data->id) }}" method="post">@csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Existing Icon </label>
                                        <div>
                                            <i class="{{ $feature_data->icon }} fz_40"></i>

                                        </div>

                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Icon</label>
                                        <input type="text" class="form-control" name="icon"
                                            value="{{ $feature_data->icon }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Heading</label>
                                        <input type="text" class="form-control" name="heading"
                                            value="{{ $feature_data->heading }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Text</label>
                                        <textarea name="text" id="" cols="30" rows="10" class="form-control h_100">{{ $feature_data->text }}</textarea>

                                    </div>


                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
