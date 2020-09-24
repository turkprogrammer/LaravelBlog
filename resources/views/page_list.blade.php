@extends('layouts.master')
@section('content')
<div class="container">
    <br/>
    @foreach($pages as $page)
    <div class="card">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <div class="image-wrapper">
                        <img src="{{ asset(Voyager::image($page->image))}}" alt="{{$page->title}}">
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="card-box">
                        <h5 class="card-title mbr-fonts-style m-0 display-5">
                            <strong><a href="/pages/{{$page->slug}}" class="text-primary"><strong>{{$page->title}}</strong></a></strong>
                        </h5>
                        <h6 class="mbr-fonts-style mb-3 display-4">
                            <strong>{{$page->created_at}}</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {{$page->excerpt}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    @endforeach
    {!! $pages->links() !!}


</div>  
@endsection