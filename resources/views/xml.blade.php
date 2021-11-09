<?php
echo '<?xml version="1.0"?>';
?>

<data>
    @foreach($shops as $shop)
        @if ($real_time >= $shop->open && $real_time < $shop->close)
            <shop id="{{ $shop->id }}">
                <name>{{ $shop->name }}</name>
                <url>{{ $shop->url }}</url>
                <working_time>
                    <open>{{ $shop->open }}</open>
                    <close>{{ $shop->close }}</close>
                </working_time>
                <offers>
                    @foreach($shop->products as $product)
                        <item id="{{ $product->id }}">
                            <name>{{ $product->name }}</name>
                            <description>{{ $product->description }}</description>
                            <price>{{ $product->price }}</price>
                        </item>
                    @endforeach
                </offers>
            </shop>
        @endif
    @endforeach
</data>

