@extends('dashboard.master')

@section('contect')

   @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>
@endsection