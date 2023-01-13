@extends('dashboard.layouts.app', ['activePage' => ''])

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $topicsCount }}</h3>

                    <p>Topics</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $materialsCount }}</h3>
                    <p>Materials</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $membersCount }}</h3>

                    <p>Members</p>
                </div>
                <a href="{{ route('dashboard.members.index') }}">
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
