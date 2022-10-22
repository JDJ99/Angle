{{--<x-layout>--}}
    @foreach($products as $product)
        <article>
            <h1>
                <a href="/products/"{{ $product->id}}
                    {{ $product->title }}
                </a>
            </h1>

            <div>
                {{ $product->discription }}
            </div>

        </article>
    @endforeach
{{--</x-layout>--}}
