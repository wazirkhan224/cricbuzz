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
                                    <form class="live-stream-form" method="post" action="{{route('admin_post-create')}}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="position-relative form-group">
                                            <label for="title" class="">Post  Title</label>
                                            <input type="text" name="title" id="title" placeholder="Enter  Title" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="description" class="">Post  Description</label>
{{--                                            <input type="text" name="description" id="description" placeholder="Enter  Description" class="form-control">--}}
                                            <textarea class="form-control" name="description" id="description" placeholder="Enter  Description" rows="3"></textarea>
                                        </div>
                                        <div class="position-relative form-group"><label for="file" class="">Upload Image</label>
                                            <input name="file" id="file" type="file" class="form-control-file" >
                                            <small class="form-text text-muted">upload image for the post .</small>
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
                                        PosTs Lists
                                    </h3>
                                    <div class="col-md-12 col-md-12">
                                        <table  id="example"  class="table table-hover">
                                            <thead>
                                            <tr class="text-center">
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>description</th>
                                                <th>Post Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr class="text-center">
                                                    <td>{{$post->id}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$post->description}}</td>
                                                    <td>
                                                        <img src="{{asset('images/'.$post->file)}}" alt="" border="0" width="50px"></td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin_post-edit',$post->id)}}"><i class="fas fa-edit" style="color: green !important;"></i></a>
                                                        <a href="{{route('admin_post-delete',$post->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color: red !important;"></i></a>
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


