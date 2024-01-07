@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Post Show</h1>
    </div>
</section>
<section>
    <div class="container">
        {!! $post->content !!}
    </div>
</section>
@endsection