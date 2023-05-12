@extends('layouts.user')
@section('content')
    <div>
        <div class="list-container">
            <div class="search-bar ">
                <form method="GET" action="/listing" autocomplete="off">
                    <div class="location-input">
                        <label>Location</label>
                        @if (isset($_GET['location']))
                            <input type="text" name="check_in" value="{{ $_GET['location'] }}">
                        @else
                            <input type="text" name="location" placeholder="Enter the Location" required>
                        @endif
                    </div>
                    <div class="location-input">
                        <label>Check In</label>
                        @if (isset($_GET['check_in']))
                            <input type="date" name="check_in" value="{{ $_GET['check_in'] }}">
                        @else
                            <input type="date" name="check_in" placeholder="Add Date" required>
                        @endif
                    </div>
                    <div class="location-input">
                        <label>Check Out</label>
                        @if (isset($_GET['check_out']))
                            <input type="date" name="check_out" value="{{ $_GET['check_out'] }}">
                        @else
                            <input type="date" name="check_out" placeholder="Add Date" required>
                        @endif
                    </div>
                    <button type="submit" class="btn" id="btn"><i class="fa fa-search"></i></button>
                    <a href="/listing" class="btn" id="btn"><i class='bx bx-refresh btn-lg'></i></a>
                </form>
            </div>
            <div class="left-col">
                <h2>Recommended Places</h2>
                @foreach ($users as $user)
                    <div class="house">
                        <div class="house-img">
                            @if ($user->image != null)
                                <a href="/list/{{ $user->id }}">
                                    <img src="{{ url('images/' . explode(',', $user->image)[0]) }}">
                                </a>
                            @endif
                        </div>
                        <div class="house-info">
                            <h4>{{ $user->housename }}-{{ $user->address }},{{ $user->city }}</h4>
                            <p>House Type-{{ $user->housetype }} </p>
                            <p>{{ $user->facilities }}</p>
                            <p>Contact.no - {{ $user->mobile }}</p>

                            @if ($user->check_out == date('Y-m-d'))
                                <button type="button" class="btn btn-secondary btn-sm"
                                    onclick="sam({{ $user }})">Not Available
                                </button>
                            @else
                                <a><button type="button" data-toggle="modal" data-target="#myModal"
                                        class="btn btn-primary btn-sm" onclick="sam({{ $user }})">Booking
                                    </button></a>
                            @endif
                            <div class="house-price">
                                <h5>{{ $user->guest }} Guest</h5>
                                <h4 style="color:#ff5361"><i class="fa-solid fa-indian-rupee-sign">
                                        {{ $user->price }}</i>
                                    <span>/ day</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal fade" id="myModal">
            <div id="popup">
                <div class="booking">
                    <form action="/booking" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="elem-group mt-3">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('name')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="elem-group mt-3">
                            <label for="email">Your E-mail</label>
                            <input type="email" id="email" class="form-control" name="email">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('email')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="elem-group mt-3">
                            <label for="phone">Your Phone</label>
                            <input type="tel" id="phone" class="form-control" name="phone" required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('phone')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mt-3 " style="display: flex">
                            <label class="col-sm-2 mt-2">Adults</label>
                            <input type="number" name="adult" class="form-control" name="" placeholder="0"
                                required>
                            <label class="col-sm-2 mt-2">Children</label>
                            <input type="number" name="child" class="form-control" name="" placeholder="0"
                                required>
                        </div>
                        <div class="form-group mt-3" style="display: flex">
                            <label class="col-sm-2 mt-2">Check-in </label>
                            <input type="date" class="form-control" name="check_in" required>
                            <label class="col-sm-2 mt-2">Check-out</label>
                            <input type="date" class="form-control" name="check_out" required>
                        </div>
                        <hr>

                        <a href="/listing"><button type="button" class="btn btn-secondary btn-sm">Back
                            </button></a>
                        <button type="submit" class="btn btn-primary btn-sm">Book
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
