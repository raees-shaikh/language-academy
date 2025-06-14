@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Testimonials</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Testimonials</li>
            </ol>
            <a href="createTestimonials" role="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                    class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Comments</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->comment}}</td>
                                <td>{{ $testimonial->name}}</td>
                                <td>
                                    <form method="post" action="{{url('deleteTestimonials',$testimonial->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="Delete"
                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                        </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $testimonials->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection