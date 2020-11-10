@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Usuário</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert  alert-sucess" role="alert">
                            {{ session('satus') }}
                        </div>
                    @endif
                    You are logged in user!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection