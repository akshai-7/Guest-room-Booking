@extends('layouts.user')
@section('content')
    <div class="adminform">
        <form action="/createhouse" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div>
                <h4 class="" style="color:#ff5361"><i class="fa-solid fa-house"></i> House Details</h4>
            </div>
            <div class="report1">
                <div class="report">
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3  col-form-label">Owner Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" placeholder="House.No/Flat.no/Street"
                                required>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3  col-form-label">City</label>
                        <div class="col-sm-8">
                            <input type="text" name="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3  col-form-label"> Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3 col-form-label"> Mobile</label>
                        <div class="col-sm-8">
                            <input type="text" name="mobile" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-3  col-form-label">House Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="housename" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="subreport">
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-3  col-form-label">House Type</label>
                        <div class="col-sm-8">
                            <select name="housetype" class="form-control" name="type">
                                <option value="">Select</option>
                                <option value="Vila">Vila</option>
                                <option value="Flat">Flat</option>
                                <option value="Plot">Plot</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3 col-form-label">Facilities</label>
                        <div class="col-sm-8">
                            <input type="text" name="facilities" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3 col-form-label">No of Guest</label>
                        <div class="col-sm-8">
                            <input type="text" name="guest" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-8">
                            <input type="text" name="price" class="form-control" required>
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
@endsection
