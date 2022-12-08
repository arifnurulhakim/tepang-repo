@extends('layouts.front')

@section('content')
    <!--TOP BANNER-->
    <div class="inn-banner">
        <div class="container">
            <div class="row">
                <h4>Our Menu</h4>
                <p>Lihat semua menu yang ditawarkan tepang kami oleh cafe master chef.
                <p>
            </div>
        </div>
    </div>
    @if(count($foods) > 0)
    <!--TOP SECTION-->
    <div class="inn-body-section pad-bot-65">
        <div class="container">
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Appetizers</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Makanan Pembuka </p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Appetizer")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>Rp. {{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Soup</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Makanan Menu Soup.</p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Soup")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>Rp. {{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Salad</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Menu Salad.</p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Salad")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>Rp. {{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Main Course</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Menu Utama.</p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Main Course")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>Rp. {{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Dessert</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Hidangan Penutup.</p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Dessert")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>Rp. {{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TOP SECTION-->
    @else
        No Foods Available
    @endif
@endsection
