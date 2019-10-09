@extends('layouts.admin.master')
@section('title','Edit author')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit author</h4>
                    <form class="forms-sample" action="{{ route('author.update',$author->id) }}" method="post">
                        @csrf
                        @method('put')
                        @include('admin.author._form')
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
