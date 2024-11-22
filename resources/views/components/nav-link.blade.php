@props(["text","url_route"])

<a href="{{ $url_route }}"
   class=" {{ request()->segment(1)==ltrim($url_route, '/') ? 'active' : '' }} text-[#2E2E2E] rounded-lg ml-10 font-medium w-fit hover:underline pl-2 pr-2 pt-2 pb-2">
    {{ $text }}
</a>
