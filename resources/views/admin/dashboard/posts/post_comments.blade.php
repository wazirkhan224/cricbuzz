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
                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <p><h3 class="text-center" style="margin-bottom: 30px;">Post Comment</h3></p>
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Comments</th>
                                          <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>
                                            <a href="{{route('admin_comment-edit',$comment->id)}}"><i class="fas fa-edit" style="color: green !important;"></i></a>
                                            <a href="{{route('admin_delete_comment',$comment->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color: red !important;"></i></a>
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
            <!-- end of the container  -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
