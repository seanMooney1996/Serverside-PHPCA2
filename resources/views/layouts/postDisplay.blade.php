<div class="displayFlexIndex">
    <div class="holdMiddleIndex">
        <div class="imageHoldIndexPage">
            <img class="imagePost" src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div class="textBoxColor1 ">
            <div class="postContent">
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="">
                By <span class="font-bold italic text-black-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>
                <h4>Recent Comments</h4>
                <div class="commentsHold">
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
                            <p><strong>{{ $post->comments[0]->user->name }}</strong>: {{ $post->comments[0]->content }}
                                <br/>
                                Posted at: {{ date('jS M Y', strtotime( $post->comments[$i]->created_at)) }}
                            </p>
                        </div>
                        @endif
                    </div>
                    <div class="buttonsBottom">
                        <a href="/blog/{{ $post->slug }}"
                           class="uppercase rounded-3xl goldButton">
                            Keep Reading
                        </a>

                        @if (isset(Auth::user()->id) )
                            <a
                                href="{{ route('comments.create', ['postId' => $post->id, 'userId' => Auth::id(),'slug' => $post->slug]), }}"
                                class="uppercase rounded-3xl goldButton">
                                Add a comment
                            </a>
                        @endif

                    </div>
            </div>
        </div>
    </div>
</div>
