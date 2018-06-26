<section class="col-md-4 sidebar">
        <div class="card sidebar-content">
                <img src="http://www.livebrightandhealthy.com/wp-content/uploads/2013/10/ads-300x300-300x300.jpg" alt="#" class="img-fluid">
        </div>
        <div class="card card--recent-post mb-3">
            <header class="card__header">
                <h3>Recent Post</h3>
                <span class="fa fa-telegram" style="font-size: 24px; color:#198997"></span>
            </header>
            <div class="card__content">
                <div class="list-group list-group-flush">
                    @if(recent_post()->count())
                    <ul>
                    @foreach (recent_post() as $recentPost)
                    <li>
                        <a href="{{ route('getSingle', $recentPost->slug) }}" class="recent__post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="recent-post-img">
                                        @if($recentPost->image)
                                        <img class="rounded float-left mr-3 lazyload" src="{{ asset('img/placeholder.svg') }}" data-src="{{ Voyager::image($recentPost->image)}}">
                                        @else
                                        <img class="rounded float-left mr-3 lazyload" src="{{ asset('img/placeholder.svg') }}">
                                        @endif
                                </div>
                                <h6 class="mb-1">{{ $recentPost->title }}</h6>
                                <small class="text-muted">{{ date('M j, Y', strtotime( $recentPost->created_at )) }}</small>
                            </div>
                        </div>
                        </a>
                    </li>
                    @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    <div class="fb-page" data-href="https://www.facebook.com/farnetwork.net" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/farnetwork.net"><a href="https://www.facebook.com/farnetwork.net">FarNetwork</a></blockquote></div></div>
</section>