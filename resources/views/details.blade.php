@extends('layouts.user')
@section('content')
    <div>
        <div class="list-container1">
            <div id="houseDetails">
                <h2>House Details</h2>
            </div>
            <div class="mt-3">
                @foreach ($lists as $lists)
                    <div class="house">
                        <div class="house-img1">
                            @if ($lists->image != null)
                                <a>
                                    <img src="{{ url('images/' . explode(',', $lists->image)[0]) }}">
                                </a>
                            @endif
                        </div>
                        <div class="mt-5" id="otherdetails">
                            <h3>{{ $lists->housename }},{{ $lists->address }}-{{ $lists->city }}</h3>
                            <h4>House Type-{{ $lists->housetype }} </h4>
                            <h4>{{ $lists->facilities }}</h4>
                            <h5>{{ $lists->guest }} Guest</h5>
                            <h4 style="color:#ff5361"><i class="fa-solid fa-indian-rupee-sign"> {{ $lists->price }}</i>
                                <span>/ day</span>
                            </h4>
                            <a><button type="button" data-toggle="modal" data-target="#myModal"
                                    class="btn btn-primary btn-sm" onclick="sam({{ $lists }})">Booking
                                </button></a>
                        </div>
                        <div class="mt-5" id="ownerdetails">
                            <h4>House Owner - Mr.{{ $lists->name }}</h4>
                            <h5>Contact.no - {{ $lists->mobile }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div id="popup">
            <div class="booking">
                <form action="/booking" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="elem-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control">
                        <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('name')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="elem-group">
                        <label for="email">Your E-mail</label>
                        <input type="email" id="email" class="form-control" name="email">
                        <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('email')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="elem-group">
                        <label for="phone">Your Phone</label>
                        <input type="tel" id="phone" class="form-control" name="phone">
                        <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('phone')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="form-group " style="display: flex">
                        <label class="col-sm-2 mt-2">Adults</label>
                        <input type="number" name="adult" class="form-control" name="" placeholder="0">
                        <label class="col-sm-2 mt-2">Children</label>
                        <input type="number" name="child" class="form-control" name="" placeholder="0">
                    </div>
                    <div class="form-group " style="display: flex">
                        <label class="col-sm-2 mt-2">Check-in </label>
                        <input type="date" class="form-control" name="check_in">
                        <label class="col-sm-2 mt-2">Check-out</label>
                        <input type="date" class="form-control" name="check_out">
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary btn-sm">Book
                    </button>
                    <a href="/list/{{ $lists->id }}"><button type="button" class="btn btn-secondary btn-sm">Back
                        </button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
