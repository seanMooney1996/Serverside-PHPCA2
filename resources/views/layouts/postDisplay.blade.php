
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    <div class="postContent">
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
        @if (sizeof($post->comments) >= 2)
            @for ($i = 0; $i < 2; $i++)
                <div class="comment">
                    <p>
                        <strong>{{ $post->comments[$i]->user->name }}</strong>: {{ $post->comments[$i]->content }}
                        <br/>
                        Posted at: {{ date('jS M Y', strtotime( $post->comments[$i]->created_at)) }}
                    </p>
                </div>
            @endfor
        @elseif(sizeof($post->comments) == 1)
            <div class="comment">
                <p><strong>{{ $post->comments[0]->user->name }}</strong>: {{ $post->comments[0]->content }}<br/>
                    Posted at: {{ date('jS M Y', strtotime( $post->comments[$i]->created_at)) }}
                </p>
            </div>
        @endif
        <div class="buttonsBottom">
            <a href="/blog/{{ $post->slug }}"
               class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) )
                <a
                    href="{{ route('comments.create', ['postId' => $post->id, 'userId' => Auth::id(),'slug' => $post->slug]), }}"
                    class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Add a comment
                </a>
            @endif

        </div>
    </div>
