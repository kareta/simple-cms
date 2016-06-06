<div class="home-image"><img src="{{ getThemeUrl('images/home.jpg') }}" alt=""></div>

<div class="row">
    @foreach($posts as $post)
        <div>
            <h2><a href="{{ route('blog.post', [$post['id'], $post['slug']]) }}">{{ $post['title'] }}</a></h2>

            <p>
                Posted by {{ $post['author']['name'] }} on {{ $post['published_date'] }}
            </p>

            {!! $post['excerpt_html'] or $post['body_html'] !!}
        </div>
    @endforeach
</div>