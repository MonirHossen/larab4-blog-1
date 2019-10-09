@extends('layouts.admin.master')
@section('title','Create new user')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new user</h4>
                    <form class="forms-sample" action="{{ route('user.store') }}" method="post">
                        @csrf
                        @include('admin.user._form')
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
