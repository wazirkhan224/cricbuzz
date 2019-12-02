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
                            Live Streaming
                        </h2>
                        <form class="live-stream-form" method="post" action="{{route('admin_live_create')}}">
                            @csrf
                            <div class="position-relative form-group"><label for="live_linke" class="">Live Streaming Link</label><input type="text" name="live_link" id="live_link" placeholder="Live  Link" class="form-control"></div>
                            <button class="mt-1 btn btn-primary" type="Submit">Submit</button>
                        </form>
                            <div class="col-md-6 offset-md-3 responsive">
                              @if(count($record) < 0)
                                  <div class="alert alert-warning">
                                   <strong>Sorry!</strong> No Product Found.
                                  </div>                                      
                                  @else
                                @foreach($record as $records)

                                <iframe width="100%" height="320px"  src=" {{ $records->live_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @endforeach
                                @endif

                            </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>


@endsection
