@extends('template')

@section('title','Home')

@section('content')
    <h1>Home</h1>

    <table class="table table-dark table-hover">
            <tr>
                <th scope="col">Image / Video</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>

            <tbody>
                @foreach ($post_data as $post)
                <tr>
                    <td>
                        @if ($post->type == "image")
                            <img src="{{$post->content_url}}" alt="" width="500px" height="500px">
                        @else
                        <video src="{{$post->content_url}}"controls width="500px" height="500px"></video>
                        @endif
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                    {{$post->text}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


