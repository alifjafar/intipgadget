<ul class="nav justify-content-center justify-content-lg-start">
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
                 <li class="nav-item">
                     <a class="nav-link" href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                 </li>
                 @endif
        @endforeach
</ul>