<body class="animate__animated animate__fadeIn">

    <div class="overlay"></div>

    <div class="grid-container">
        <div class="content">
            <div class="title-box m-b-md animate__animated animate__fadeInUp">
                <img src="{{asset('assets/images/cute_taco.png')}}" alt="" />
                <h3>Let's calculate some tacos</h3>
            </div>

            @include('calculator.form')

            @if(count($results) > 0)
                @include('calculator.top-10')
            @endif
        </div>
    </div>

</body>
