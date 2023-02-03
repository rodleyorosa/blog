<div class="flex justify-between my-4">
    <li><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }} {{ $author->surname }} <span class="mx-2">-</span> 
        <span>{{ $author->posts->count() }} 
            @if ($author->posts->count() == 1)
                articolo
            @else
                articoli
            @endif
        </span>
    </a></li>
</div>