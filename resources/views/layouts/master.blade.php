<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis|Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    @yield('style')
</head>
<body>
    
    @yield('header')
    
    @yield('content')

    <footer class="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill footer-svg" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
        </svg>
        <div class="wrapperFooter">
            <h3 class="text-center">iş mülakatım</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="wrapperFooterBox">
                            <h4>İletişim</h4>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapperFooterBox">
                            <h4>İletişim</h4>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapperFooterBox">
                            <h4>İletişim</h4>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>