<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venpic Agencies</title>
    <link rel="stylesheet" href="home/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,
    wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto+Condensed:ital,wght@0,300;0,400;
    0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <!-- Header start -->
        @include('home.header')
    <!-- End of Header Section -->

    <section class="category-search">

        <div class="container-search">
            <form action="" class="search-bar">
                <input type="text" placeholder="Search home or a place" name="q">
                <button type="submit"><i  class="bi bi-search " ></i></button>
            </form>
            
        </div>

        <div class="category-options">
                <button class="category-opts-btn" style="background-color:#2c64f5; color: #fff">
                    All   
                </button>

                <button class="category-opts-btn">
                    Single room
                </button>

                <button class="category-opts-btn">
                    Double room
                </button>

                <button class="category-opts-btn">
                    Bed-sitter
                </button>

                <button class="category-opts-btn">
                    1-Bedroom
                </button>

                <button class="category-opts-btn">
                    2-Bedroom
                </button>

                <button class="category-opts-btn">
                    3-Bedroom
                </button>

                <button class="category-opts-btn">
                    4-Bedroom
                </button>

                

        </div>
        <div class="filter-container">
            <div class="search-info">
                <p>Search Resuts For:""</p>

            </div>
            <div class="filter">
                
                <form action="">
                    <i class="bi bi-funnel-fill filter-icon"></i>
                    <label for="sort">Sort By:</label>
                    <select id="sort" name="sort">
                      <option value="Price">Price</option>
                      <option value="Distance">Distance</option>
                      <option value="Security">Security</option>
                      <option value="Luxury">Luxury</option>
                    </select>
                   
                  </form>
                <div>
                    <span onclick="filterhide()" id="filter-1"><button ><i class="bi bi-arrow-down-square-fill filter-icon"></i></button> Lowest</span>
                    <span onclick="filterhide1()" id="filter-2" style="display:none"> <button > <i class="bi bi-arrow-up-square-fill filter-icon"></i></button> Highest</span> 
           
                </div>
            </div>
        </div>
    
    </section>

    {{-- search results --}}
    <section class="results">
        <p style="font-size: 13px">Showing items: 1-16 of 100</p>
        
        <div class="results-container">

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            <div class="result-card">
                <img src="images/slider.png" alt="">
                    <div>
                        <p>Step into luxury with this stunning, modern masterpiece. From the sleek architectural design
                            to the panoramic views, every detail of this house exudes elegance and sophistication.
                            Your dream home awaits.</p>
                    </div>
                    <div>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons "></span>
                        <span class="bi bi-star-fill filter-icons icons"></span>
                        <span class="bi bi-star-half filter-icons icons"></span>
                        <span class="bi bi-star     filter-icons  icons"></span>
                        <span style="font-size: 12px;">  200 Reviews</span>
                    </div>
                <p> <span style="color:green;"><strong>KES 24000</strong></span> <span style="color:#2c64f5;"><strong>/month</strong></span></p>

            </div>

            



        </div>

        <div class="category-pagination">
            <button id="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>6</button>
            <button>7</button>
            <button>8</button>
            <button>9</button>
            <button>>></button>

        </div>


    
    </section>

        <hr style="opacity:0.1;">

    <!-- Footer start -->

        @include('home.footer')

    <!-- Footer End -->
    <script>
          var logoutTimer;

            function startLogoutTimer() {
            var timeoutDuration = 30 * 60 * 1000; // Set  timeout 

            logoutTimer = setTimeout(function() {
                // Perform AJAX logout request or redirect to the logout endpoint
                window.location.href = '/logout';
            }, timeoutDuration);
            }

            function resetLogoutTimer() {
            clearTimeout(logoutTimer);
            startLogoutTimer();
            }

        // Calls the resetLogoutTimer() function whenever the user performs any activity, such as clicking a button or making an AJAX request.

        document.addEventListener('click', function() {
        resetLogoutTimer();
        });
        
        // Calls the resetLogoutTimer() function whenever the user performs any activity
        document.addEventListener('click', function() {
        resetLogoutTimer();
        });
    
        // Starts the logout timer initially when the page loads
        startLogoutTimer();
    </script>

    <script src="home/main.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html> 