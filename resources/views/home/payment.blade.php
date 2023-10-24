<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venpic Agencies</title>
    <link rel="stylesheet" href="/home/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,
    wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto+Condensed:ital,wght@0,300;0,400;
    0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .card {
            width: 400px;
            margin-top: 80px;
            margin-bottom: 20px;


        }

        .pay {
            font-size: 18px;
            color: #000;
            font-weight: 600;
            margin-top: 5px;
        }

        .amount {
            font-size: 18px;
            color: #000;
            font-weight: 600;
            margin-top: 5px;
        }

        .inner {
            padding: 8px 19px;
        }

        .payment {
            font-weight: 400;
            font-size: 16px;
            border: none;
            width: 80px;
            background-color: #2c64f5;
            color: #ffffff;
            margin-bottom: 5px;
        }

        .payment:hover {
            background-color: rgb(21, 197, 21);
            color: #ffffff
        }
    </style>


</head>

<body>
    <!-- Header start -->
    @include('home.header')
    <!-- End of Header Section -->

    <section>
        @if (session()->has('message'))
            @php
                $messageType = session()->get('message_type', 'info'); // Default to 'info' if no type is set
            @endphp

            @if ($messageType === 'success')
                <div class="alert alert-success">
                @elseif ($messageType === 'warning')
                    <div class="alert alert-warning">
                    @elseif ($messageType === 'error')
                        <div class="alert alert-danger">
                        @else
                            <div class="alert alert-info"> {{-- A default alert type in case no message_type is set --}}
            @endif

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}

            </div>
        @endif


        <div class="container mt-3 d-flex justify-content-center main">
            <div class="card">
                <div class="d-flex justify-content-between px-3 pt-4">
                    <span class="pay">Amount</span>
                    <div class="amount">
                        <div class="inner">
                            <span class="dollar">KES</span>
                            <span class="total">1000</span>
                        </div>
                    </div>
                </div>

                <div class="px-3 pt-3">
                    <label for="card number" class="d-flex justify-content-between">
                        <span class="labeltxt">CARD NUMBER</span>
                    </label>
                    <input type="number" name="number" class="form-control inputtxt"
                        placeholder="8881 2553 4678 2345">
                </div>

                <div class="d-flex justify-content-between px-3 pt-4">
                    <div>
                        <label for="date" class="exptxt">Expiry</label>
                        <input type="number" name="number" class="form-control expiry" placeholder="MM / YY">

                    </div>

                    <div>
                        <label for="cvv" class="cvvtxt">Expiry</label>
                        <input type="number" name="number" class="form-control cvv" placeholder="123">

                    </div>
                </div>

                <div class="d-flex align-content-center  justify-content-end px-3 pt-4">

                    <div>
                        <button type="button" class="btn payment">Pay</button>
                    </div>

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
            var timeoutDuration = 30 * 60 * 1000; // Set timeout

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
            if (document.visibilityState === "visible") {
                resetLogoutTimer();
            }
        });

        // Starts the logout timer initially when the page loads
        if (document.visibilityState === "visible") {
            startLogoutTimer();
        }

        // Listens for changes in the visibility state
        document.addEventListener("visibilitychange", function() {
            if (document.visibilityState === "visible") {
                // Page is now active
                startLogoutTimer();
            } else {
                // Page is not active
                clearTimeout(logoutTimer);
            }
        });
    </script>

    <script src="/home/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
