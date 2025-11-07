@php
    $brands = \App\Models\Brand::orderBy('name')->get();
    $alphabet = range('A', 'Z');
@endphp

@foreach($alphabet as $letter)
    <p style="display: inline;"><a href="{{ route('first_letter_brands', ['letter' => $letter]) }}">{{ $letter; }}</a> -</p>

    @foreach($brands as $brand)
        @php
            $asociatedBrand = $brands->filter(function($brand) use ($letter) {
                return (substr($brand->name, 0, 1)) == $letter;
            });
        @endphp

    @endforeach
@endforeach
