@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="span7">   
                <div class="widget stacked widget-table action-table">

                    <div class="widget-header">
                        <i class="icon-th-list"></i>
                        <h3>User Profile</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <table class="table table-striped table-bordered">

                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                  
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                  
                                </tr>
                                <tr>
                                    <td>User Id</td>
                                    <td>{{$user->id}}</td>
                                  
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>Internet
                                    Explorer 4.0</td>
                                  
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>Internet
                                    Explorer 4.0</td>
                                  
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>Internet
                                    Explorer 4.0</td>
                                  
                                </tr>
                                
                            </tbody>
                        </table>
                        <a href="{{route('delete_user',['id'=>$user->id])}}"><button>Delete</button></a>

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
        </div>
    </div>
</div>


@endsection
