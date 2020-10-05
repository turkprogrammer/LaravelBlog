@extends('layouts.master')
@section('content')

<hr/>

<section class="image1 cid-sbrD4n3Iei" id="image1-1i">
    
   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="{{ asset(Voyager::image($post->image))}}" alt=" {{ $post->title }}">
                  
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                        <strong>{{ $post->title }}</strong></h3><span>Posted on: <em> {{$post->created_at}}</em> by: <span class="badge badge-primary"><?php echo ($post->authorId->name); ?></span> </span><br/>
                        Category: <span class="badge badge-secondary">{{$post->category->name}}</span>
                    <p class="mbr-text mbr-fonts-style display-7">
                        {!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="social1 cid-s9UwWjzbZe" id="share1-10">
    
    
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-title mb-3 align-center mbr-fonts-style display-4">
                    <strong>Share this Page!</strong>
                </h3>
                <div>
                    <div class="mbr-social-likes align-center">
                        <span class="btn btn-social socicon-bg-facebook facebook m-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter m-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte m-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki m-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest m-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail m-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

@endsection
