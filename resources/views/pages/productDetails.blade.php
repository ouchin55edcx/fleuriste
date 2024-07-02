@extends('layout')

@section('content')
    <div class="bg-green-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white mt-12 rounded-lg shadow-xl overflow-hidden">
                <div class="md:flex">
                    <!-- Product Images -->
                    <div class="md:w-1/2 p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-zoom-in"
                                    onclick="openZoom(this)">
                                    <img src="https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto,w_1400/v1707713064/vendor/7591/catalog/product/2/0/20240123055455_file_65affd6f34df8_65b005acda09c.jpg"
                                        alt="Main Product Image"
                                        class="w-full h-96 object-cover transition duration-300 transform group-hover:scale-105">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                        <span
                                            class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <i class="fas fa-search-plus text-3xl"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-lg shadow-md group cursor-zoom-in"
                                onclick="openZoom(this)">
                                <img src="https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto,w_1400/v1707713064/vendor/7591/catalog/product/2/0/20240123055455_file_65affd6f34df8_65b005acda09c.jpg"
                                    alt="Product Image 2"
                                    class="w-full h-48 object-cover transition duration-300 transform group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                    <span
                                        class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-search-plus text-2xl"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="relative overflow-hidden rounded-lg shadow-md group cursor-zoom-in"
                                onclick="openZoom(this)">
                                <img src="https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto,w_1400/v1707713064/vendor/7591/catalog/product/2/0/20240123055455_file_65affd6f34df8_65b005acda09c.jpg"
                                    alt="Product Image 3"
                                    class="w-full h-48 object-cover transition duration-300 transform group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                                    <span
                                        class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i class="fas fa-search-plus text-2xl"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Zoom Modal -->
                    <div id="zoomModal"
                        class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden">
                        <div class="relative w-full h-full max-w-4xl max-h-4xl">
                            <img id="zoomedImage" src="" alt="Zoomed Product Image"
                                class="w-full h-full object-contain">
                            <button onclick="closeZoom()"
                                class="absolute top-4 right-4 text-white text-2xl hover:text-green-500 transition duration-300">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-4">
                            <button id="zoomIn"
                                class="bg-white text-gray-800 px-4 py-2 rounded-full hover:bg-green-500 hover:text-white transition duration-300">
                                <i class="fas fa-search-plus mr-2"></i>Zoom In
                            </button>
                            <button id="zoomOut"
                                class="bg-white text-gray-800 px-4 py-2 rounded-full hover:bg-green-500 hover:text-white transition duration-300">
                                <i class="fas fa-search-minus mr-2"></i>Zoom Out
                            </button>
                        </div>
                    </div>


                    <!-- Product Details -->
                    <div class="md:w-1/2 p-8">
                        <h1 class="text-3xl font-bold text-green-800 mb-4">Emerald Rose Elegance</h1>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">(4.5 stars, 128 reviews)</span>
                        </div>
                        <p class="text-gray-600 mb-6">
                            Indulge in the timeless beauty of our Emerald Rose Elegance bouquet. This stunning arrangement
                            features a dozen premium long-stemmed roses in a rich, emerald green hue. Nestled among lush
                            greenery and accented with delicate baby's breath, this bouquet is the perfect blend of
                            sophistication and natural beauty.
                        </p>
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold text-green-700 mb-2">Details:</h2>
                            <ul class="list-disc list-inside text-gray-600">
                                <li>12 long-stemmed emerald roses</li>
                                <li>Fresh eucalyptus and fern accents</li>
                                <li>Elegant glass vase included</li>
                                <li>Handcrafted by expert florists</li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-between mb-8">
                            <span class="text-3xl font-bold text-green-600">$79.99</span>
                            <div class="flex items-center">
                                <button
                                    class="bg-gray-200 text-gray-700 px-3 py-1 rounded-l hover:bg-gray-300 transition">-</button>
                                <input type="number" value="1"
                                    class="w-16 text-center border-t border-b border-gray-200 py-1" />
                                <button
                                    class="bg-gray-200 text-gray-700 px-3 py-1 rounded-r hover:bg-gray-300 transition">+</button>
                            </div>
                        </div>
                        <button
                            class="w-full bg-black text-white py-3 px-6 rounded-full text-lg font-semibold hover:bg-green-800 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-green-800 mb-6">You May Also Like</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Related Product Cards (3) -->
                    @foreach (['Verdant Daisy Delight', 'Tropical Green Orchid', 'Forest Wildflower Blend'] as $relatedProduct)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://example.com/related-flower.jpg" alt="{{ $relatedProduct }}"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold text-green-700 mb-2">{{ $relatedProduct }}</h3>
                                <p class="text-gray-600 mb-4">A beautiful arrangement to complement any space</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-600">$59.99</span>
                                    <button
                                        class="bg-black text-white px-4 py-2 rounded-full hover:bg-green-700 transition duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection


