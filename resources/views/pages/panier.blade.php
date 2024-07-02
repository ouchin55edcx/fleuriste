@extends('layout')

@section('content')
    <div class="bg-green-50 min-h-screen py-12">
        <div class="container mx-auto px-4 mt-12">
            <h1 class="text-3xl font-bold text-green-800 mb-8">Your Shopping Cart</h1>

            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="p-6 mt-12">
                    
                    <!-- Cart Cards -->
                    <div class="divide-y divide-gray-200">
                        <div class="flex items-center py-6">
                            <img src="https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto,w_200/v1707713064/vendor/7591/catalog/product/2/0/20240123055455_file_65affd6f34df8_65b005acda09c.jpg"
                                alt="Emerald Rose Elegance" class="w-24 h-24 object-cover rounded-md">
                            <div class="ml-4 flex-grow">
                                <h3 class="text-lg font-semibold text-green-800">Emerald Rose Elegance</h3>
                                <p class="text-gray-600">A stunning arrangement of premium roses</p>
                            </div>
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-green-500 focus:outline-none">
                                    <i class="fas fa-minus-circle"></i>
                                </button>
                                <span class="mx-2 w-8 text-center">1</span>
                                <button class="text-gray-500 hover:text-green-500 focus:outline-none">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                            <span class="ml-4 text-lg font-semibold text-green-600">$79.99</span>
                            <button class="ml-4 text-red-500 hover:text-red-700 focus:outline-none">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>

                        <div class="flex items-center py-6">
                            <img src="https://asset.bloomnation.com/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto,w_200/v1707713064/vendor/7591/catalog/product/2/0/20240123055455_file_65affd6f34df8_65b005acda09c.jpg"
                                alt="Verdant Daisy Delight" class="w-24 h-24 object-cover rounded-md">
                            <div class="ml-4 flex-grow">
                                <h3 class="text-lg font-semibold text-green-800">Verdant Daisy Delight</h3>
                                <p class="text-gray-600">Cheerful arrangement of fresh daisies</p>
                            </div>
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-green-500 focus:outline-none">
                                    <i class="fas fa-minus-circle"></i>
                                </button>
                                <span class="mx-2 w-8 text-center">2</span>
                                <button class="text-gray-500 hover:text-green-500 focus:outline-none">
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </div>
                            <span class="ml-4 text-lg font-semibold text-green-600">$119.98</span>
                            <button class="ml-4 text-red-500 hover:text-red-700 focus:outline-none">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="mt-8 border-t border-gray-200 pt-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-lg text-gray-600">Subtotal</span>
                            <span class="text-lg font-semibold text-green-600">$199.97</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-lg text-gray-600">Shipping</span>
                            <span class="text-lg font-semibold text-green-600">$10.00</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xl font-bold text-gray-800">Total</span>
                            <span class="text-xl font-bold text-green-600">$209.97</span>
                        </div>
                    </div>

                    <!-- Checkout Button -->
                    <div class="mt-8">
                        <button
                            class="w-full bg-green-600 text-white py-3 px-6 rounded-full text-lg font-semibold hover:bg-green-700 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                            Proceed to Checkout
                        </button>
                    </div>

                    <!-- Continue Shopping Link -->
                    <div class="mt-4 text-center">
                        <a href="{{url('products')}}" class="text-green-600 hover:text-green-800 transition duration-300">
                            <i class="fas fa-arrow-left mr-2"></i>Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
