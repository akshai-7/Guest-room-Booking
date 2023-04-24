@extends('layouts.user')
@section('content')
    <div class="adminform">
        <form action="/createhouse" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div id="userHeading">
                <h4 class="" style="color:#3109c4;"><i class="fa-solid fa-house"></i> House Detailes</h4>
            </div>
            <div class="report1">
                <div class="report">
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label">Owner Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('name')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" placeholder="House.No/Flat.no/Street">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('address')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" placeholder="--select city--">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('gender')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label"> Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('date_of_birth')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label"> Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('mobile')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subreport">
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">House Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="housename" class="form-control" required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('name')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">House Type</label>
                        <div class="col-sm-9">
                            <select name="housetype" class="form-select" name="type">
                                <option value="">Select</option>
                                <option value="Vila">Vila</option>
                                <option value="Flat">Flat</option>
                                <option value="Car">Car</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label class="col-sm-2 col-form-label">House Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image[]" class="form-control" multiple required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('image')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label">Facilities</label>
                        <div class="col-sm-9">
                            <input type="text" name="facilities" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error(' facilities')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn text-white mt-4"
                        style="float:right;background:#bf0e3a;">
                    <a href="/createhouse">
                        <input type="button" value="Back" class="btn btn-secondary text-white mt-4" style="float:right;">
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection