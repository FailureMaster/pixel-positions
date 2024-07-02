@props(['tag', 'size' => 'base'])

@php
    dd($tag); // Temporarily dump the tag variable for debugging
@endphp

@php
    $classes = "bg-white/5 hover:bg-white/25 rounded-xl transition-colors duration-300";

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-xs';
    }
    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-sm';
    }
@endphp

<a href="" class="{{$classes}}">{{$tag->name}}</a>
