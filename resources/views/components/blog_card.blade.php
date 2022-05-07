<article class="format-standard">
                        <div class="entry-date"><div class="number">@php echo Carbon\Carbon::parse($created_at)->format('d') @endphp</div><div class="month">@php echo Carbon\Carbon::parse($created_at)->format('M') @endphp</div> <div class="year">@php echo Carbon\Carbon::parse($created_at)->format('Y') @endphp</div><em></em></div>
                        <div  class="post-heading">
                            <h4><a href="/blog/{{$id}}">{{$title}}</a></h4>
                            <div class="meta">
                                <span class="user"><a href="#">{{$author}}</a></span>
                                <span class="comments"><a href="#">5 comments </a></span>
                            </div>
                        </div>
                        <div class="feature-image">
                            <a href="/img/slides/01.jpg" data-rel="prettyPhoto">
                                <img src="/{{$photos}}" alt="Alt text" />
                            </a>
                        </div>
                        <div class="excerpt">{{\Illuminate\Support\Str::limit($text, 200, $end='...')}}
                        </div>
                        
                    </article>