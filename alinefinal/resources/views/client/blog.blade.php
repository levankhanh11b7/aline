@extends('client.layoutclient.master')

@section('title', 'blog')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-blog set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">

            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('storage/' . $blog->image) }}"></div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('img/icon/calendar.png') }}" alt=""> 16 February 2020</span>
                        <h5> {{ $blog->title }}</h5>
                        <a href="{{ route('blogdetail',$blog->id) }}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            
           
            
            
            
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection