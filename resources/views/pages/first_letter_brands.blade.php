<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>

    <x-aflphabetical_filter/>


    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4" style="width: 100%;">
            <h2>{{ $letter; }}</h2>



            @foreach($brands->chunk($chunk_size) as $chunk)

                    <ul>
                        @foreach($chunk as $brand)
                            <li>
                                <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                <?php
                ?>
            @endforeach
                </div>

        </div>

    </div>

</x-layouts.app>
