<span class="social-button">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
           class="social-facebook" target="_blank">
           <i class="fa fa-facebook-official"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"
            class="social-twitter" target="_blank">
            <i class="fa fa-twitter-square"></i>
        </a>
        <a href="https://plus.google.com/share?url={{ urlencode($url) }}"
            class="social-google-plus" target="_blank">
           <i class="fa fa-google-plus-square"></i>
        </a>
        <a href="https://pinterest.com/pin/create/button/?{{
            http_build_query([
                'url' => $url,
                'media' => $image,
                'description' => $description
            ])
            }}" class="social-pinterest" target="_blank">
            <i class="fa fa-pinterest-square"></i>
        </a>
    </span>