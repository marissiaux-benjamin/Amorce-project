@props(['label_text','type','placeholder'])
<div class=" relative flex flex-col mb-6">
    <label class="mb-2 text-lg font-bold">
        {{ $label_text }}
    </label>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" class="border-2 py-3 pl-11 rounded-xl text-[#2E2E2E] bg-transparent">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-12 left-4">
        <path d="M18.0999 7C17.256 6.03533 16.1867 5.38281 15.0262 5.12426C13.8657 4.8657 12.6656 5.01262 11.5764 5.5466C10.4872 6.08058 9.55735 6.97784 8.90347 8.12587C8.24959 9.27391 7.90078 10.6216 7.90078 12C7.90078 13.3784 8.24959 14.7261 8.90347 15.8741C9.55735 17.0222 10.4872 17.9194 11.5764 18.4534C12.6656 18.9874 13.8657 19.1343 15.0262 18.8758C16.1867 18.6172 17.256 17.9647 18.0999 17M13.8999 10H5.8999M5.8999 14H13.8999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

</div>
