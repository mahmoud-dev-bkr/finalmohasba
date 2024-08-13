<nav class="mb-3 bg-nav">
    <div class="container">
        <div class="d-flex  border-primary d-flex justify-content-between">

            <div class=" p-2">
                <a href="{{ URL('dashboard') }}">
                
                    <img src="{{ URL('images/LOGO ARABIC AND ENGLISH.png') }}" alt="" width="120" height="60">
                </a>
            </div>
            <div>
                <h1 class="text-white">Welcome to <span class="text-primary">POS</span></h1>
            </div>
            <div class=" text-center p-2">

                <h1 class="fw-bold ">{{ auth()->user()->name_en }}</h1>
            </div>
        </div>
    </div>
</nav>
