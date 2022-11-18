@extends('Front.layouts.app')

@push('styles')
<style>
    button.control {
        background: #FFFFFF !important;
        border-radius: 3px !important;
        height: 60px !important;
        line-height: 60px !important;
        padding: 0 25px !important;
        display: flex !important;
        justify-content: space-between !important;
        position: relative !important;
        border: none !important;
        width: 100%;
        text-align: left;
        transition: all .5s;
    }

    button.control.active-category {
        background: #86a0d6 !important;
        color: white;
        font-weight: 700
    }

    .card {
        transition: all .5s
    }
    .card:hover {
        box-shadow: 1px -1px 28px 3px rgba(57,47,194,0.61);
        -webkit-box-shadow: 1px -1px 28px 3px rgba(57,47,194,0.61);
        -moz-box-shadow: 1px -1px 28px 3px rgba(57,47,194,0.61);
        transform: translateY(-8px)
    }
    .card img {
        transition: all 1s;
    }
    .card .image {
        overflow: hidden
    }
    .card:hover img {
        transform: scale(1.1)
    }


</style>
@endpush

@section('breadcrump')
    @include('Front.layouts.breadcrumb' , [
        'title' => $year->name,
        'items' => [
            [
                'name' => 'Home',
                'link' => '/'
            ],
            [
                'name' => "$year->name Topics",
                'link' => "#"
            ],

        ]
    ])
@endsection

@section('content')
<div class="edu-blog-details-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 order-2 order-lg-1">
                <aside class="edu-blog-sidebar">
                    <div class="edu-blog-widget mt--40 widget-categories" id="edu-blog-widget">
                        <div class="inner">
                            <h5 class="widget-title">Categories</h5>
                            <div class="content">
                                <ul class="category-list">
                                    <li>
                                        <button type="button" class="control active-category" data-filter="all">All<span>({{ $topics->count() }})</span></button>
                                    </li>
                                    @foreach ($categories as $category)
                                    <li >
                                        <button type="button" class="control " data-filter=".category-{{ $category->id }}">{{ $category->name }} <span>({{ $category->topics_count }})</span></button>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="blog-details-1 pt-5">

                    <div class="container">
                        <div class="row topics-container">
                            @forelse ($topics as $topic)
                            <div class="col-4 mb-5 mix category-{{$topic->category_id}}">
                                <div class="card ">
                                    <div
                                        class="image"
                                        style="height: 170px ; border-bottom: 1px solid black ; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px"
                                    >
                                        <img src="{{ asset('storage/'.$topic->image) }}" style="width: 100% ; height: 100%" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $topic->title }}</h5>
                                        <p class="card-text">{{ $topic->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div style="padding-top: 60px">
                                <h3 class="text-center">There isn't any topic yet!</h3>
                            </div>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        mixitup($('.topics-container'));
    </script>
    <script>
        $('.control').on('click' , function(){
            $('.control').removeClass('active-category');
            $(this).addClass('active-category');
        })
    </script>
@endpush
