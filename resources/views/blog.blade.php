@extends('template.app')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="flex flex-row">
        @forelse ($posts as $post)
            <div class="col-md-9s">
                <div class="row">
                    <!-- post -->
                    <div class="col-md-10">
                        <div class="post post-flex">
                        <img src=" {{asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 300px">
                            <div class="post-body">
                                <div class="post-meta">
                                </div>
                                <h3 class="post-title"><a href="">{{ $post->title }}</a></h3>
                                  <p class="description">{{ $post->content}}</p>     
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning">SHOW</a>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                    <!-- /post -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection