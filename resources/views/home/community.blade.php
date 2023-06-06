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

    {{-- Community section --}}

    <section class="community">
        <div class="community-options">
            <button class="community-opts-btn" id="active">
                Latest   
            </button>

            <button class="community-opts-btn">
                Recommended
            </button>

            <button class="community-opts-btn">
                Popular
            </button>

            <button class="community-opts-btn">
                New Topic
            </button>

            <button class="community-opts-btn">
                Trending
            </button>

            <button class="community-post-btn">
                <i class="bi bi-plus-lg"></i>
                Add Post
            </button>


        </div>

        <h5 >Latest Posts</h5>

        <div class="community-posts-container">

            <div class="community-post-card">
                <div class="card-header">
                        <div>
                            <img src="images/slider.png" alt="">
                        </div>

                        <div style="transform:translateX(-80px)">
                            <h6 style="font-size: 14px">Joan Paulo</h6>
                            <span style="font-size: 12px; color:rgb(168, 163, 163);">1h ago</span>
                        </div>
                        <div>
                            <span style="font-size: 20px; color:rgb(168, 163, 163); cursor: pointer;"><i class="bi bi-bookmark"></i></span>
                        </div>
                </div>
                <div class="card-msg">
                    <h6 style="font-weight: 550; color:rgb(131, 126, 126);">Coding in Php</h6>
                    <span style="font-size: 14px">LMAO, try to coode with chat gpt is just amater but its great having fun.</span> <br>
                    <span><img style=" object-fit: cover; width: 80px; height: 80px; border-radius:5px;"  src="images/hse1.png" alt=""></span> 
                </div>
                <div class="card-stats">
                    <span><i style="font-size: 20px; color:rgb(168, 163, 163); cursor: pointer;" class="bi bi-hand-thumbs-up"></i> 83 votes</span>
                    <a href="{{ url('communityreplies') }}"><span  style="cursor: pointer;"><i style="font-size: 20px; color:rgb(168, 163, 163);" class="bi bi-reply"></i> 14 replies</span></a>
                    <span><i style="font-size: 20px; color:rgb(168, 163, 163);" class="bi bi-eye"></i> 1.2k views</span>
                </div>
            </div>

            





        </div>







    </section>













    <hr style="opacity:0.1;">

    <!-- Footer start -->

        @include('home.footer')

    <!-- Footer End -->
    <script>
          var logoutTimer;

            function startLogoutTimer() {
            var timeoutDuration = 15 * 60 * 1000; // Set  timeout 

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