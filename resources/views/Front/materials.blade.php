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
@php
    $year_id = $topic->year->id;
    $route = route('home.topics' , $year_id  )
@endphp
@section('breadcrump')
    @include('Front.layouts.breadcrumb' , [
        'title' => $topic->title,
        'items' => [
            [
                'name' => 'Home',
                'link' => '/'
            ],
            [
                'name' => $topic->year->name,
                'link' => " $route "
            ],
            [
                'name' => "$topic->title",
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
                            <h5 class="widget-title">Materials</h5>
                            <div class="content">
                                <ul class="category-list">
                                    <li>
                                        <button type="button" class="control active-category" data-filter="all">All<span>({{ $materials->count() }})</span></button>
                                    </li>
                                    @foreach ($categories as $category)
                                    @php
                                        $name =  str_replace(' ', '-', $category->name);
                                    @endphp
                                    <li >
                                        <button type="button" class="control " data-filter=".category-{{ $name }}">{{ $category->name }} <span>({{ $category->materials_count }})</span></button>
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
                            @forelse ($materials as $material)
                            @php
                                $name =  str_replace(' ', '-', $material->category_id);
                            @endphp
                            <div class="col-4 mb-5 mix category-{{$name}}">
                                <a href="{{ route('download' , $material->file) }}">
                                    <div class="card ">
                                        <div
                                            class="image"
                                            style="height: 170px ; border-bottom: 1px solid black ; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px"
                                        >
                                            @php
                                                Log::info($name)
                                            @endphp
                                            @if ( $name == 'book')
                                                <img src="{{ asset('assets/images/book.svg') }}" style="width: 100% ; height: 100%" alt="...">
                                            @elseif ( $name == 'summary')
                                                <img src="{{ asset('assets/images/summary.svg') }}" style="width: 100% ; height: 100%" alt="...">
                                            @elseif ( $name == 'test-questions')
                                                <img src="{{ asset('assets/images/test.svg') }}" style="width: 100% ; height: 100%" alt="...">
                                            @endif
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $material->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div style="padding-top: 60px">
                                <h3 class="text-center">There isn't any material yet!</h3>
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
