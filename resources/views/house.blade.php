@extends('layouts.user')
@section('content')
    {{-- <div class="house-details">
        <div class="house-title">
            <h1>Akshai House</h1>
            <div class="row">
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>245 Reviews</span>
                </div>
                <div>
                    <p>Location: San Francisco,California,United States</p>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-img-1"><img src="images/house-1.png"></div>
            <div><img src="images/house-2.png"></div>
            <div><img src="images/house-3.png"></div>
            <div><img src="images/house-4.png"></div>
            <div><img src="images/house-5.png"></div>
        </div>
        <div class="small-details">
            <h2>Entire rental unit hosted by Brandon</h2>
            <p>2 guest &nbsp; &nbsp; 2 beds &nbsp; &nbsp; 1 bathroom</p>
            <h4>$ 100 / day</h4>
        </div>
        <hr class="line">
        <form class="check-form">
            <div>
                <label for="">Check-in</label>
                <input type="text" placeholder="Add date">
            </div>
            <div>
                <label for="">Check-out</label>
                <input type="text" placeholder="Add date">
            </div>
            <div class="guest-field">
                <label for="">Guest</label>
                <input type="text" placeholder="2 guest">
            </div>
            <button type="submit">Check Availability</button>
        </form>
        <ul class="details-list">
            <li> <i class="fa-solid fa-house-user"></i> Entire Home
                <span>You will have the entire flat for you.</span>
            </li>
            <li> <i class="fa-solid fa-paintbrush"></i> Enhanced Clean
                <span>This host has committed to staybnb's cleaning process.</span>
            </li>
            <li> <i class="fa-solid fa-location-dot"></i> Great Location
                <span>90% of recent guests gave the location a 5 star rating.</span>
            </li>
            <li> <i class="fa-solid fa-heart"></i> Great check - in experience
                <span>100% of recent guests gave the check-in process a 5 star rating.</span>
            </li>
        </ul>
        <hr class="line">
        <p class="home-desck ">Guestes wil be Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos incidunt
            iure officia a dolor distinctio possimus aspernatur excepturi repellendus beatae, reprehenderit officiis
            nemo accusamus quo maxime minima earum placeat perferendis dolores perspiciatis doloribus. Suscipit
            architecto consequatur doloribus, consequuntur qui optio sed! Eveniet, enim? Pariatur, suscipit
            consequuntur. Explicabo sunt obcaecati autem.</p>
        <hr class="line">
        <div class="map">
            <h3>Location on map</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125323.47046917326!2d76.967235!3d11.011709600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1665827637587!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <b> San Francisco, California, united States</b>
            <p>It's like a home away from home.</p>
            <hr class="line">
            <div class="host">
                <img src="images/host.png" alt="">
                <div>
                    <h2>Hosted by Brandon</h2>
                    <p>
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </span>&nbsp;&nbsp; 245 reviews &nbsp;&nbsp; Response rate 100% &nbsp;&nbsp; Response time: 60
                        mins
                    </p>
                </div>
            </div>
            <a href="#" class="contact-host">Contact Host</a>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="footer">
            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <hr>
            <p>Copyright 2022 @ Akshai</p>
        </div>

    </div> --}}
    <div class="adminform">
        <form action="#" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div id="userHeading">
                <h5 class="" style="color:#3109c4;"><i class="fa-solid fa-user"></i> House Detailes</h5>

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
                            <input type="text" name="address" class="form-control" placeholder="House.No/Street">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('address')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <input type="text" name="gender" class="form-control" value="Male">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('gender')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2  col-form-label"> D.O.B</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_of_birth" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('date_of_birth')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label for="" class="col-sm-2 col-form-label"> Company</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" class="form-control" value="M&D foundations">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('company')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label class="col-sm-2 col-form-label">License</label>
                        <div class="col-sm-9">
                            <input type="file" name="license[]" class="form-control" multiple required>
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('license')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="subreport">
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" placeholder="House.No/Street">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('address')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label">Country</label>
                        <div class="col-sm-9">
                            <input type="text" name="country" class="form-control" value="United Kingdom">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('country')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2  col-form-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('email')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" name="password" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('password')
                                    *{{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4 ">
                        <label class="col-sm-2 col-form-label"> Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile" class="form-control">
                            <div style="color:rgb(216, 31, 31);font-size:14px;"> @error('mobile')
                                    *{{ $message }}
                                @enderror
                            </div>
                            <input type="submit" name="" value="Submit" class="btn text-white mt-4"
                                style="float:right;background:#f0184e;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
