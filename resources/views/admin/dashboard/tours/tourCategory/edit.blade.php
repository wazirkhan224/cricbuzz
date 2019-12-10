@extends('admin.layouts.master')
@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-md-12">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>
                                    Admin Dashboard
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of header  -->
                    <div class="row">
                        <div class="col-md-12 col-md-12">
                            <div class="main-card mb-3 card" style="margin-top: 10px">
                                <div class="card-body">
                                    <h3 class="card-title text-center" >
                                        Update Category
                                    </h3>
                                    <p>
                                    @if(session()->get('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif
                                        </p>
                                    <form class="live-stream-form" method="post" action="{{route('admin_update_tc',$edittours->id)}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="position-relative form-group">
                                            <label for="title" class="">Category  Description</label>
                                            <input type="text" name="title" id="title" placeholder="Enter  Title" class="form-control" value="{{$edittours->title}}">
                                        </div>
                                        <button class="mt-1 btn btn-primary" type="Submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of the container  -->
@endsection

@section('scripts')
@endsection


