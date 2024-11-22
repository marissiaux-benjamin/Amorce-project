@props(["bg_color","text","text_color","url_route"])
<div class="font-medium text-lg">
    <a href="{{ $url_route }}" class="{{ $text_color }} {{ $bg_color }} shadow-lg rounded-xl pt-3 pb-3 pr-16 pl-16">
        {{ $text }}
    </a>
</div>
