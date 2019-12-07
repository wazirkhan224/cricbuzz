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
                                    Tours
                                </h3>
                                <p>
                                    @if(session()->get('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </p>
                                <form class="live-stream-form" method="post" action="{{route('admin-tour-detail')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="position-relative form-group">
                                        <label for="title" class="">upcoming  Tours</label>
                                    <select class="mb-2 form-control" name="cat_tours_id">
                                        <option>Select Tour</option>
                                        @foreach($tourcat as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="description" class="">Category  Name</label>
                                        <input type="text" name="title" id="title" placeholder="Enter  Title" class="form-control">
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
                                    Tour list
                                </h3>
                                <div class="col-md-12 col-md-12">
                                    <table  id="example"  class="table table-hover">
                                        <thead>
                                        <tr class="text-center">
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th >Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tourdetail as $tour)
                                        <tr class="text-center">
                                            <td>{{ $tour->id}}</td>
                                            <td>{{ $tour->title}}</td>

                                            <td >
                                                <a href="{{route('admin_tour-edit',$tour->id)}}"><i class="fas fa-edit" style="color: green !important;"></i></a>
                                                <a href="{{route('admin_tour-delete',$tour->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color: red !important;"></i></a>
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


