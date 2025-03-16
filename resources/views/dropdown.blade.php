@once
    <link rel="stylesheet" href="{{ asset('vendor/lang-switcher/css/flag-icons.min.css') }}" />
@endonce
<div class="relative">
    <select
            onchange="window.location.href = this.value"
            class="appearance-none bg-gray-100 rounded p-2 pr-8 text-sm focus:outline-none"
    >
        @php
            $langs = json_decode(\Vnideas\Initial\Models\VniOption::where('option_name', 'langs_enabled')->first()->option_value, true, 512, JSON_THROW_ON_ERROR);
            $currentLang = app()->getLocale();
        @endphp
        @foreach ($langs as $lang)
            <option
                    value="{{ route('lang.switch', $lang) }}"
                    {{ $currentLang === $lang ? 'selected' : '' }}
            >
                <span class="flex items-center">
                    <span class="fi fi-{{ $lang }} w-5 h-5 mr-2"></span>
                    {{ strtoupper($lang) }}
                </span>
            </option>
        @endforeach
    </select>
</div>