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
                                        Posts Detail
                                    </h3>
                                    <form class="live-stream-form" method="post" action="{{route('admin_post-update',$posts->id)}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <div class="position-relative form-group">
                                            <label for="title" class="">Post  Title</label>
                                            <input type="text" name="title" id="title" placeholder="Enter  Title" class="form-control" value="{{$posts->title}}">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="description" class="">Post  Description</label>
{{--                                            <input type="text" name="description" id="description" placeholder="Enter  Description" class="form-control" value="{{$posts->description}}">--}}
                                            <textarea class="form-control" name="description" id="description"  rows="3">{{$posts->description}}</textarea>
                                        </div>
                                        <span style="float: right"><img src="{{asset('images/'.$posts->file)}}" alt="" border="0" width="30%"></span>


                                        <div class="position-relative form-group"><label for="file" class="">Update  Image</label>
                                            <input name="file" id="file" type="file" class="form-control-file" value="{{$posts->file}}">
                                            <small class="form-text text-muted">Update image for the post</small>
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
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable();
                        } );
                    </script>
@endsection


