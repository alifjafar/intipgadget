<section class="navik-header header-shadow navik-mega-menu mega-menu-fullwidth">
    <div class="container">
        <!-- Navik header -->
        <div class="navik-header-container">

            <!--Logo-->
            <div class="logo" data-mobile-logo="{{ asset('img/logo.png') }}" data-sticky-logo="{{ asset('img/logo.png') }}">
                <a href="{{ route('blog') }}" ><img src="{{ asset('img/logo.png') }}" alt="logo"/></a>
            </div>

            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>

            <!--Navigation menu-->
            <nav class="navik-menu menu-caret submenu-top-border">
                <ul>
                     @foreach($items as $menu_item)
                    @php
                        $submenu = $menu_item->children;
                    @endphp
                    @if(count($submenu) >= 1)
                        <li class="has-dropdown">
                            <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                            <ul class="dropdown">
                                @foreach($submenu as $item)
                                    <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                                @endforeach
                            </ul>
                    @else
                        <li>
                            <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                        </li>
                    @endif
                @endforeach
                    <li class="mega-menu"><a href="#">Tech News</a>
                        <ul>
                            <li>

                                <!-- Mega menu container -->
                                <div class="mega-menu-container">
                                    <div class="row">

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <a href="#">
                                                        <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                    </a>
                                                </div>
                                                <h4 class="mega-menu-heading"><a href="#">Sodales luctus nunc</a></h4>
                                                <div class="mega-menu-desc">
                                                    Donec tellus faucibus dolor viverra neca blandit at justo pendisse dolor turpis lobortis sodales felis justo hendrerit fermentum quam fusce mattis nibh nulla.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <a href="#">
                                                        <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                    </a>
                                                </div>
                                                <h4 class="mega-menu-heading"><a href="#">Mauris cursus eros</a></h4>
                                                <div class="mega-menu-desc">
                                                    Quisque vitae sapien neque in fusce amet enim nec nisl gravida rutrum sed id justo sem adipiscing aliquam potenti morbi vehicula.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <a href="#">
                                                        <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                    </a>
                                                </div>
                                                <h4 class="mega-menu-heading"><a href="#">Praesent nec luctus</a></h4>
                                                <div class="mega-menu-desc">
                                                    Laoreet eu ornare at nulla sit luctus neque dapibus rhoncus malesuada metus vivamus sodales quam nullam fringilla magna ut elit varius varius lobortis hendrerit.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <a href="#">
                                                        <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                    </a>
                                                </div>
                                                <h4 class="mega-menu-heading"><a href="#">Etiam semper mauris</a></h4>
                                                <div class="mega-menu-desc">
                                                    Placerat justo vitae massa molestie vehicula ultricies pharetra nisl sem fermentum a sollicitudin sed nam dapibus ultrices justo sed sem congue molestie.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="#">About Us</a>
                        <ul>
                            <li>

                                <!-- Mega menu container -->
                                <div class="mega-menu-container">
                                    <div class="row">

                                        <!-- Column -->
                                        <div class="col-lg-4">

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Aliquam metus vitae</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Donec nec faucibus lobortis viverra blandit sem justo
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Donec neca faucibus</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Aliquam ultrices ullamcoroe ultrices gravida dictum
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Lobortis sem mauris</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Integer aliquet magna neca tellus orci quis semper
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Column -->
                                        <div class="col-lg-4">

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Fusce semper ante</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Laoreet tellus a consectetur bibendum dolor posuere
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Aliquam ipsum sem</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Sollicitudin ut gravida libero commodo sit malesuada
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-media">
                                                    <div class="mega-menu-media-img">
                                                        <div class="mega-menu-thumbnail">
                                                            <a href="#">
                                                                <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-media-info">
                                                        <h4 class="mega-menu-heading"><a href="#">Posuere himenaeos</a></h4>
                                                        <div class="mega-menu-desc">
                                                            Porta gravida hendrerit vitae blandit in phasellus ipsum
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Column -->
                                        <div class="col-lg-4">

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <a href="#">
                                                        <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                    </a>
                                                </div>
                                                <h4 class="mega-menu-heading"><a href="#">Etiam semper mauris</a></h4>
                                                <div class="mega-menu-desc">
                                                    Consequater placerat justo vitae massa molestie ultricies pharetra nisl sem fermentum a sollicitudin amet condimentum.
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="#">Shop</a>
                        <ul>
                            <li>

                                <!-- Mega menu container -->
                                <div class="mega-menu-container">
                                    <div class="row">

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Aliquam metus vitae</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Quisque orci augue</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laoreet amet ante</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aenean quam vitae</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aliquam ac semper</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nulla ligula puvinar</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Donec neca faucibus</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Laoreet amet ante</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quisque orci augue</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nulla ligula pulvinar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aenean quam vitae</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aliquam ac lobortis</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Lobortis sem mauris</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Aenean quam vitae</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nulla ligula pulvinar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quisque orci augue</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aliquam ac lobortis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laoreet sem sodales</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Fusce semper ipsum</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Aenean quam vitae</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aliquam ac lobortis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Laoreet amet ante</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nulla ligula pulvinar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quisque orci augue</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Gravida mauris congue</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Laoreet amet interdum</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quisque sapien auguer</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Nulla ligula pulvinar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aenean condimentum</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aliquam naca lobortis</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="mega-menu-box">
                                                <h4 class="mega-menu-heading"><a href="#">Aliquam ipsum commodo</a></h4>
                                                <ul class="mega-menu-list">
                                                    <li>
                                                        <a href="#">Fusce adipiscing neque</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Quis laoreet pretium</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aenean pellentesque</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Aenean sodales conubia</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cursus inceptos aliquamer</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-3">

                                            <div class="mega-menu-box">
                                                <div class="mega-menu-thumbnail">
                                                    <img src="/assets/img/1527236218-background.jpg" alt="thumbnail"/>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li>
                         <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" style="border-width:2.3px" type="search" placeholder="Search..." aria-label="Search">
                            {{-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button> --}}
                        </form>
                    </li>
                    {{-- <li class="submenu-right" id="search">
                        <a href="#" id="search-form">  <i class="fa fa-search" aria-hidden="true"></i></a>
                            <div class="search-box">
                                    <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Kata Kunci" aria-label="Search">
                                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
                                        </form>
                             </div>
                    </li> --}}

                </ul>
            </nav>
        </div>


    </div>
</section>