@extends('layout')

@section('content')

<!--hero section-->
<div class="flex flex-wrap ">
    <div class="w-full sm:w-8/12 mt-12">
        <div class="container mx-auto h-full sm:p-10">
            <header class="container px-4 lg:flex mb-24 items-center h-full lg:mt-0 ">
                <div class="w-full mt-12">
                    <h1 class="text-4xl lg:text-6xl font-bold">Find your <span class="text-green-700">greeny</span> stuff for your room</h1>
                    <div class="w-20 h-2 bg-green-700 my-4"></div>
                    <p class="text-xl mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maiores neque eaque ea odit placeat, tenetur illum distinctio nulla voluptatum a corrupti beatae tempora aperiam quia id aliquam possimus aut.</p>
                    <button class="bg-green-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Learn More</button>
                </div>
            </header>
        </div>
    </div>
    <img src="https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
</div>




@endsection
