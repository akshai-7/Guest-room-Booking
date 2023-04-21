@extends('layouts.user')
@section('content')
    <section class="header">
        <div class="container">
            <h1>Find Your Next Stay</h1>
            <div class="search-bar">
                <form>
                    <div class="location-input">
                        <label>Location</label>
                        <input type="text" placeholder="Where are you going">
                    </div>
                    <div>
                        <label>Check In</label>
                        <input type="text" placeholder="Add Date">
                    </div>
                    <div>
                        <label>Check Out</label>
                        <input type="text" placeholder="Add Date">
                    </div>
                    <div>
                        <label>Guest</label>
                        <input type="text" placeholder="Add Guest">
                    </div>
                    <button type="submit"><img src="images/search.png"></button>
                </form>
            </div>
        </div>
    </section>
    <section class="container" id="popularPlace">
        <h2 class="sub-title">Exclusives</h2>
        <div div class="exclusives">
            <div>
                <img src="images/image-1.png">
                <span>
                    <h3>Londan</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-2.png">
                <span>
                    <h3>Switzerland</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-3.png">
                <span>
                    <h3>Australia</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-4.png">
                <span>
                    <h3>France</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-5.png">
                <span>
                    <h3>Amsterdam</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-6.png">
                <span>
                    <h3>Netherlands</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-7.png">
                <span>
                    <h3>New York</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-8.png">
                <span>
                    <h3>Chicago</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-9.png">
                <span>
                    <h3>San Francico</h3>
                    <p>Starts @$250</p>
                </span>
            </div>
            <div>
                <img src="images/image-10.png">
                <span>
                    <h3>Shanghai</h3>
                    <p>Starts @$250</p>
                </span>
            </div>

        </div>
        <h2 class="sub-title  ">Trending Places</h2>
        <div class="trending">
            <div>
                <img src="images/dubai.png" alt="">
                <h3>Dubai</h3>
            </div>
            <div>
                <img src="images/new-york.png" alt="">
                <h3>New York</h3>
            </div>
            <div>
                <img src="images/paris.png" alt="">
                <h3>Paris</h3>
            </div>
            <div>
                <img src="images/new-delhi.png" alt="">
                <h3>New Delhi</h3>
            </div>
        </div>

        <div class="cta">
            <h3>Sharing <br>Is Earning Now</h3>
            <p>Great opportunity to make by sharing your extra space.</p>
            <a href="#" class="cta-btn">Know More</a>
        </div>

        <h2>Travellers stories</h2>
        <div class="stories">
            <div>
                <img src="images/story-1.png" alt="">
                <p>Popular European with a Budget of just $10,000</p>
            </div>
            <div>
                <img src="images/story-2.png" alt="">
                <p>Traveled more than 100 Countries in less than a year</p>
            </div>
            <div>
                <img src="images/story-3.png" alt="">
                <p>Best experience you get while traveling to Thailand</p>
            </div>
        </div>
        <a href="#" class="start-btn">Start making money</a>
        <div class="about-msg">
            <h2>About Staybnb </h2>
            <p>Contrary to popular belif ,Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam rem
                blanditiis iste nam molestias magnam minima iusto voluptatum recusandae vero nesciunt impedit pariatur
                sequi natus amet corporis culpa porro incidunt nihil ratione maxime, ducimus, veritatis consequatur!
                Adipisci quis, ab facilis dolor dicta sequi incidunt velit labore, neque harum, ipsum eligendi.</p>
        </div>
        <div class="footer">
            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <hr>
            <p>Copyright2022 @ Akshai</p>
        </div>



    </section>
@endsection
