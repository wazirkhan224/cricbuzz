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
                            Videos
                        </h3>
                        <form class="live-stream-form" method="post" action="{{route('admin_videos-link')}}">
                            @csrf
                            <div class="position-relative form-group">
                                <label for="title" class="">Video Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter Video Title" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="video_link" class="">Video Link</label>
                                <input type="text" name="video_link" id="video_link" placeholder="Enter Video Link" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="description" class="">Video Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Video Description" rows="3"></textarea>
                            </div>
                            <button class="mt-1 btn btn-primary" type="Submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
            <!-- end of the second row  -->
            <div class="row">
            <div class="col-md-12 col-md-12">
                <div class="main-card mb-3 card" style="margin-top: 10px">
                    <div class="card-body">
                        <h3 class="card-title text-center" >
                            list of video links
                        </h3>
                        <div class="col-md-12 col-md-12">
                            <table  id="example"  class="table table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($video as $videos)
                                    <tr class="text-center">
                                        <td>{{$videos->id}}</td>
                                        <td>{{$videos->title}}</td>
                                        <td>{{$videos->video_link}}</td>
                                        <td>{{$videos->description}}</td>
                                        <td>
                                            <a href="{{ route('admin_videos-edit', $videos->id)}}"><i class="fas fa-edit" style="color: green !important;"></i></a>
                                            <a href="{{ route('admin_videos-delete', $videos->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color: red !important;"></i></a>
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
    <!-- end of the container  -->


@endsection

@section('scripts')
           <script>
               $(document).ready(function() {
                   $('#example').DataTable();
               } );
           </script>
@endsection


