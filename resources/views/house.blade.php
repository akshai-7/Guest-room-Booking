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
                            <input type="text" name="name" class="form-control">
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
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('city')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label"> Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="date" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('date')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label">Mobile</label>
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
                            <input type="text" name="housename" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('housename')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">House Type</label>
                        <div class="col-sm-9">
                            <select name="housetype" class="form-control" name="type">
                                <option value="">Select</option>
                                <option value="Vila">Vila</option>
                                <option value="Flat">Flat</option>
                                <option value=""></option>
                            </select>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('housetype')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label">Facilities</label>
                        <div class="col-sm-9">
                            <input type="text" name="facilities" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('facilities')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label">No of Guest</label>
                        <div class="col-sm-9">
                            <input type="text" name="guest" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('guest')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="price" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('price')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label class="col-sm-2 col-form-label">House Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image[]" class="form-control" multiple>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('image')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div style="float: right" class="mt-4">
                        <a href="/createhouse"><button type="button" class="btn btn-secondary btn-sm"
                                id="add">Back</button></a>
                        <button type="submit" class="btn btn-primary btn-sm" id="add">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
