@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Post Index</h1>
    </div>
</section>
<section>
    <div class="container">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post) }}">edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post) }}">
                        @csrf
                        @method('DELETE')
                        
                        <input class="btn btn-danger btn-sm" type="submit" value="delete">
                        </form>                    
                    </td>
                    </tr>
                    @empty
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection