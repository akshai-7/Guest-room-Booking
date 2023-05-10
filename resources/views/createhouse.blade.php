@extends('layouts.user')
@section('content')
    <div>
        <div class="list-container1">
            <div style="display:flex">
                <h3 class="mt-4">House Details</h3>
                <a style="margin-left:700px;" href="/house"><input type="submit" value="Add-House"
                        class="btn btn-secondary btn-sm mt-4"></a>
            </div>
            @foreach ($houses as $house)
                <div class="house">
                    <div class="house-img">
                        @if ($house->image != null)
                            <a>
                                <img src="{{ url('images/' . explode(',', $house->image)[0]) }}">
                            </a>
                        @endif
                    </div>
                    <div class="house-info mt-5">
                        <h4>{{ $house->housename }},{{ $house->address }}-{{ $house->city }}</h4>
                        <p>House Type-{{ $house->housetype }} </p>
                        <p>{{ $house->facilities }}</p>
                        <p>Contact.no - {{ $house->mobile }}</p>
                        <a onclick="check({{ $house }})"><i class="fa-solid fa-edit btn btn-success btn-sm"></i></a>
                        <a href="/delete/{{ $house->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                class="bi bi-trash-fill btn btn-danger btn-sm"></i></a>
                        <a>
                            @if ($house->status == 'Booked')
                                <button type="button" class="btn btn-success btn-sm">Booked</button>
                            @else
                                <button type="button" class="btn btn-primary btn-sm">Available
                                </button>
                            @endif
                        </a>
                        <div class="house-price">
                            <h5>{{ $house->guest }} Guest</h5>
                            <h4 style="color:#ff5361"><i class="fa-solid fa-indian-rupee-sign"> {{ $house->price }}</i>
                                <span>/ day</span>
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div id="popup">
        <div class="adminform1">
            <form action="/updatedetails/{id}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div>
                    <h4 class="" style="color:#ff5361"><i class="fa-solid fa-house"></i>House Details</h4>
                </div>
                <div class="report1">
                    <div class="report">
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label"> Id</label>
                            <div class="col-sm-8">
                                <input type="text" name="id" class="form-control" id="id">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label">Owner Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="address" class="form-control"
                                    placeholder="House.No/Flat.no/Street" id="address">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" placeholder="--select city--"
                                    id="city">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label"> Date</label>
                            <div class="col-sm-8">
                                <input type="date" name="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-8">
                                <input type="text" name="mobile" class="form-control" id="mobile">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3  col-form-label">House Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="housename" class="form-control" id="housename">
                            </div>
                        </div>
                    </div>
                    <div class="subreport">

                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3  col-form-label">House Type</label>
                            <div class="col-sm-8">
                                <select name="housetype" class="form-control" name="type" id="housetype">
                                    <option value="">Select</option>
                                    <option value="Vila">Vila</option>
                                    <option value="Flat">Flat</option>
                                    <option value="Car">Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3 col-form-label">Facilities</label>
                            <div class="col-sm-8">
                                <input type="text" name="facilities" class="form-control" id="facilities">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3 col-form-label">No of Guest</label>
                            <div class="col-sm-8">
                                <input type="text" name="guest" class="form-control" id="guest">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-8">
                                <input type="text" name="price" class="form-control" id="price">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label class="col-sm-3 col-form-label">Current Image</label>
                            <div class="col-sm-6">
                                <img id="image" class="rounded-0 border border-secondary" width="70px"
                                    height="70px">
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label class="col-sm-3 col-form-label">House Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image[]" class="form-control" multiple required>
                            </div>
                        </div>
                        <div style="float: right" class="mt-4">
                            <a href="/createhouse"><button type="button" class="btn btn-secondary btn-sm"
                                    id="add">Back</button></a>
                            <button type="submit" class="btn btn-primary btn-sm" id="add">Submit</button>
                        </div>
                    </div>
                </div>


        </div>
        </form>
    </div>
@endsection
