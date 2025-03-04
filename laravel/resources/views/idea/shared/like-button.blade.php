<div>
    @auth
        @if (Auth::user()->likes->contains($idea->id))
            <form action="{{ route('idea.unlike', $idea->id) }}" method="POST">
                @csrf
                <button type="submit" class="fw-light nav-link fs-6">
                    <span class="fas fa-heart me-1"></span> {{ $idea->likes_count }}
                </button>
            </form>
        @else
            <form action="{{ route('idea.like', $idea->id) }}" method="POST">
                @csrf
                <button type="submit" class="fw-light nav-link fs-6">
                    <span class="far fa-heart me-1"></span> {{ $idea->likes_count }}
                </button>
            </form>
        @endif
    @endauth
    @guest
        <a href="{{ route('login') }}" class="fw-light nav-link fs-6">
            <span class="far fa-heart me-1"></span> {{ $idea->likes_count }}
        </a>
    @endguest
</div>
