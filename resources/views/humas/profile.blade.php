@extends('layouts.layout')

@section('title','Profile')
@section('content')
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('pesan'))
                         <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session('pesan') }}
                        </div>
                        @endif
                        <div class="card" align="center" style="margin-left: 2%;">
                            <div class="header text-center">
                                <h1 class="pe-7s-user"></h1>
                                <h4 class="title">PROFILE ADMIN</h4>
                            </div><hr>
                            <div class="content">
                                <form>
                                     @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ID Admin</label>
                                                <input type="text" class="form-control text-center" disabled value=" {{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control text-center" placeholder="Username" value=" {{ Auth::user()->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control text-center"  value="{{ Auth::user()->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    @endguest
                                    
                                </form>

                            </div>

                        </div>
                         <div class="clearfix"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-fill pull-left">Ubah Password</button></div>
                    </div>
               
            </div>
        </div>
                    

@endsection
<div id="myModal" class="modal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('/ubahPass') }}" method="post" id="form-pass">
                    
                   @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Password Lama</label>
                            <input type="password" class="form-control" name="pawal" id="pawal">
                        </div>
                        <div class="form-group">
                            <label for="">Password Baru</label>
                            <input type="password" class="form-control" name="pbaru" id="pbaru">
                        </div>
                        
                    </div>


                
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info waves-effect" value="Simpan Perubahan">
                    </div>
                    </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
