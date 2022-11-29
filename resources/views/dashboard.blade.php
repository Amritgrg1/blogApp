@extends('layout.app')

@section('form')
<div class="container">
    <table class="table table-stripped">
        <tr>
            <th>Article Title</th>
            <th>Created By</th>
        </tr>
        @foreach($posts as $post)

        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection

