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
                                    <form class="live-stream-form" method="post" action="{{route('admin_tour-update',$tourupdate->id)}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <div class="position-relative form-group">
                                            <label for="title" class="">upcoming  Tours</label>
                                            <select class="mb-2 form-control" name="title">

                                                    <option >
                                                        future_series</option>
                                            </select>
                                        </div>

                                        <div class="position-relative form-group">
                                            <label for="title" class="">Tour  Categories</label>
                                            <select class="mb-2 form-control" name="tour_category">

                                                <option>T20 tournaments</option>
                                            </select>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="description" class="">Body</label>
                                            <textarea class="form-control" name="description" id="description" placeholder="Enter  Description" rows="3">{{$tourupdate->description}}</textarea>
                                        </div>
                                        <button class="mt-1 btn btn-primary" type="Submit">Submit</button>
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


