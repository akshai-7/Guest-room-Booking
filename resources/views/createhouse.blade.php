@extends('layouts.user')
@section('content')
    <div>
        <h3>House Details</h3>
        <a style="margin-right:20px;" href="/house"><input type="submit" value="Add-House"></a>
        <table class="table table-bordered mt-3" style="border: 1px solid lightgrey;width:1300px;">
            <thead>
                <th style="text-align:center;">S.No</th>
                <th style="text-align:center;">House Owner Name</th>
                <th style="text-align:center;">Address</th>
                <th style="text-align:center;">Date</th>
                <th style="text-align:center;">Mobile.no</th>
                <th style="text-align:center;">House Name</th>
                <th style="text-align:center;">House Type</th>
                <th style="text-align:center;" class="col-md-2">Facilities</th>
                <th style="text-align:center;">House Image</th>
                <th style="text-align:center;">Action</th>
            </thead>
            <tbody>
                @foreach ($houses as $house)
                    <tr class="table_row">
                        <td style="text-align:center;" class="table_data">{{ $loop->iteration }}</td>
                        <td style="text-align:center;" class="table_data">{{ ucfirst(strtolower($house->name)) }}
                        </td>
                        <td style="text-align:center;" class="table_data col-md-2">{{ $house->address }},
                            {{ $house->city }}
                        </td>
                        <td style="text-align:center;" class="table_data">{{ $house->date }}</td>
                        <td style="text-align:center;" class="table_data">{{ $house->mobile }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $house->housename }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $house->housetype }}</td>
                        <td style="text-align:center;" class="table_data">
                            {{ $house->facilities }}</td>
                        <td style="text-align:center;" class="table_data">
                            @if ($house->image != null)
                                <a href="#">
                                    <img src="{{ url('images/' . explode(',', $house->image)[0]) }}"
                                        class="rounded-0 border border-secondary" width="50px" height="50px">
                                </a>
                            @endif
                            @if ($house->image == null)
                                <p style="text-align:center;">--</p>
                            @endif
                        </td>
                        <td style="text-align:center;" class="table_data">
                            <a onclick="check({{ $house }})"><i class="fa-solid fa-edit btn btn-success"></i></a>
                            <a href="/delete/{{ $house->id }}" data-toggle="tooltip" data-placement="top"
                                title="Delete"><i class="fa-solid fa-trash btn btn-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="popup">
        <div class="adminform1">
            <form action="/updatedetails/{id}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div>
                    <h4 class="" style="color:#3109c4;"><i class="fa-solid fa-house"></i> House Detailes</h4>
                </div>
                <div class="report1">
                    <div class="report">
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label"> Id</label>
                            <div class="col-sm-8">
                                <input type="text" name="id" class="form-control" id="id">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('id')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label">Owner Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" required id="name">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('name')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="address" class="form-control"
                                    placeholder="House.No/Flat.no/Street" id="address">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('address')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" placeholder="--select city--"
                                    id="city">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('gender')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3  col-form-label"> Date</label>
                            <div class="col-sm-8">
                                <input type="date" name="date" class="form-control" id="date">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('date')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subreport">
                        <div class="form-group row mt-4 ">
                            <label for="" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-8">
                                <input type="text" name="mobile" class="form-control" id="mobile">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('mobile')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3  col-form-label">House Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="housename" class="form-control" required id="housename">
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('housename')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="" class="col-sm-3  col-form-label">House Type</label>
                            <div class="col-sm-8">
                                <select name="housetype" class="form-select" name="type" id="housetype">
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
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error(' facilities')
                                        *{{ $message }}
                                    @enderror
                                </div>
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
                                <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('image')
                                        *{{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn text-white mt-4"
                            style="float:right;background:#bf0e3a;">
                        <a href="/createhouse">
                            <input type="button" value="Back" class="btn btn-secondary text-white mt-4"
                                style="float:right;">
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
