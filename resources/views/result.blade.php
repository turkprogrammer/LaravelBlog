@extends('layouts.master')
@section('content')



<section class="engine"><a href="#">html5 templates</a></section><section class="content1 cid-s9UmL71aUH" id="content1-u">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Last News and Articles</strong></h4>

        </div>
         <br/>
        @foreach($posts as $post)
            <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="{{ asset(Voyager::image($post->image))}}" alt="{{$post->title}}">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="item-title mbr-fonts-style display-5"><a href="/blog/{{$post->slug}}" class="text-primary"><strong>{{$post->title}}</strong></a></h5>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        {{$post->excerpt}}
                                    </p>
                                    <span>Posted on: <em> {{$post->created_at}}</em> Category: <span class="badge badge-secondary">{{$post->category->name}}</span>
                                        by: <span class="badge badge-primary"><?php echo ($post->authorId->name); ?></span>
                                    <div class="mbr-section-btn">
                                        <a href="/blog/{{$post->slug}}" class="btn btn-primary display-4">
                                            Read...
                                        </a>
                                    </div>
                                </div>
                              
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <hr/>
                 @endforeach
{!! $posts->appends(['s'=>request()->s])->links() !!}
             
    </div>
</section>   

@endsection