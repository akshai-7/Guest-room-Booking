@extends('layouts.user')
@section('content')
    <div class="list-container">
        <div class="search-bar">
            <form method="GET" action="/listing" autocomplete="off">
                <div class="location-input">
                    <label>Location</label>
                    @if (isset($_GET['location']))
                        <input type="text" name="check_in" value="{{ $_GET['location'] }}">
                    @else
                        <input type="text" name="location" placeholder="Enter the Location">
                    @endif
                </div>
                <div class="location-input">
                    <label>Check In</label>
                    @if (isset($_GET['check_in']))
                        <input type="date" name="check_in" value="{{ $_GET['check_in'] }}">
                    @else
                        <input type="date" name="check_in" placeholder="Add Date">
                    @endif
                </div>
                <div class="location-input">
                    <label>Check Out</label>
                    @if (isset($_GET['check_out']))
                        <input type="date" name="check_out" value="{{ $_GET['check_out'] }}">
                    @else
                        <input type="date" name="check_out" placeholder="Add Date">
                    @endif
                </div>
                <button type="submit" class="btn" id="btn"><i class="fa fa-search"></i></button>
                <a href="/listing"><i class="fa-solid fa-arrow-rotate-right btn"></i></a>
            </form>
        </div>
        <div class="left-col mt-4">
            <h2>Recommended Places</h2>
            @foreach ($users as $user)
                <div class="house">
                    <div class="house-img">
                        @if ($user->image != null)
                            <a href="/createhouse">
                                <img src="{{ url('images/' . explode(',', $user->image)[0]) }}">
                            </a>
                        @endif
                    </div>
                    <div class="house-info mt-5">
                        <h5>{{ $user->housename }},{{ $user->address }}-{{ $user->city }}</h5>
                        <p>House Type-{{ $user->housetype }} </p>
                        <p>{{ $user->facilities }}</p>
                        <p>Contact.no - {{ $user->mobile }}</p>
                        <div class="house-price">
                            <h6>2 Guest</h6>
                            <h4>$ 100 <span>/ day</span></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
