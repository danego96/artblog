@props(['tagsCsv'])

@php

$tags = explode(',', $tagsCsv);
    
@endphp

    @foreach($tags as $tag)
    <a href="/articles/?tag={{$tag}}" class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
        {{$tag}}
    </a>
    @endforeach
