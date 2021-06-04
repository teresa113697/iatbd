<ul class="commentSection">
    @foreach($comments as $comment)
        @include('oppas.components.comment')
    @endforeach
</ul>