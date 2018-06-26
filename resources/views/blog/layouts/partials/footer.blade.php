<footer class="border bg-dark text-white mt-5 border-bottom-0 border-left-0 border-right-0" @yield('custom-footer')>
    <div class="container pt-3 pb-3 pt-md-5 pb-md-5">
        <div class="row mb-2">
            <div class="col-md-6">
                <img src="{{ asset('img/intipgadget-white.png') }}" style="max-width:300px" class="img-fluid" />
                <p class="mt-2 pl-3">Portal Informasi Seputar Gadget dan Teknologi</p>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right pt-5">
                <div class="sosmed-button mb-3">
                    <a href="#"><span class="social-footer fa fa-facebook-official"></span></a>
                    <a href="#"><span class="social-footer fa fa-twitter"></span></a>
                    <a href="#"><span class="social-footer fa fa-google-plus"></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-0">
                {{-- Menu Footer--}}
                {!! menu('footer-menu', 'blog.layouts.partials.menu-footer') !!}
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right pt-2">
                <a class="text-light" href="/">IntipGadget.com</a>  © {{ \Carbon\Carbon::now()->format('Y') }} All Rights Reserved.
            </div>
        </div>
    </div>
</footer>