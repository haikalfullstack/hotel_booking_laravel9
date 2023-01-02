@extends('admin.layout.app')

@section('heading', 'View Slides')

@section('right_top_button')
    <div class="ml-auto">
        <a href="{{ route('admin_slide_add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Slide</a>
    </div>
@endsection

@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slides as $row)
                                        <tr>
                                            <td style="width:1%">1</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $row->photo) }}" alt=""
                                                    class="w_200">
                                            </td>

                                            <td class="pt_10 pb_10" style="width:20%">

                                                <a href="" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
