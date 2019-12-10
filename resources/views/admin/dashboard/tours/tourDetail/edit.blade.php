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
                                    Tour Detail
                                </h3>
                                <p>
                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                    @endif
                                    </p>
                                    <form class="live-stream-form" method="post" action="{{route('admin_tour-detail-update',$toured->id)}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="position-relative form-group">
                                            <label for="cat_tours_id" class="">Ucoming  Series</label>
                                            <select class="mb-2 form-control" name="cat_tours_id">
                                                <option>Select Series</option>
                                                @foreach($tourcat as $catt)
                                                    <option value="{{$catt->id}}" selected>{{$catt->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="tour_desc_id" class="">Categories </label>
                                            <select class="mb-2 form-control" name="tour_desc_id">
                                                <option>Select category</option>
                                                @foreach($tourdesc as $cat)
                                                    <option value="{{$cat->id}}" selected>{{$cat->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="description" class="">Category Description  </label>
                                            <input type="description" name="description" id="description" placeholder="Enter  description" class="form-control" value="{{$toured->description}}">
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

