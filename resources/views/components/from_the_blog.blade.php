<article class="format-standard">
    <div class="entry-date"><div class="number">@php echo Carbon\Carbon::parse($post_date)->format('d') @endphp</div><div class="month">@php echo Carbon\Carbon::parse($post_date)->format('M') @endphp</div> <div class="year">@php echo Carbon\Carbon::parse($post_date)->format('Y') @endphp</div><em></em></div>
    <div  class="post-heading">
    <h4><a href="blog/{{$artid}}">{{$title}}</a></h4>
                            </div>
                            <div class="excerpt">{{$preview}}
                            </div>
</article>