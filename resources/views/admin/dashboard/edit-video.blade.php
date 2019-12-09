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
                                    <h2 class="card-title text-center" style="font-size: 25px">
                                        Edit video
                                    </h2>
                                    <form class="live-stream-form" method="post" action="{{route('admin_videos-update',$editvideo->id)}}">
                                        @method('put')
                                        @csrf
                                        <div class="position-relative form-group">
                                            <label for="title" class="" >Video Title</label>
                                            <input type="text" name="title" id="title" placeholder="title" class="form-control" value="{{$editvideo->title}}">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="title" class="">Video Link</label>
                                            <input type="text" name="video_link" id="video_link" placeholder="title" class="form-control" value="{{$editvideo->video_link}}">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="description" class="">Video Description</label>
                                            <textarea class="form-control" name="description" id="description" placeholder="Video Description" rows="3">{{$editvideo->description}}</textarea>
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


