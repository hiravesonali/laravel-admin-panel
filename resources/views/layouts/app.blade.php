@extends('layouts.base')


@section('body')

<nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6">
    <div class="flex items-center flex-shrink-0 text-white mx-6">
      <span class="font-semibold text-2xl tracking-tight">E-commerce shop</span>
    </div>
    <div class="block lg:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 font-semibold hover:text-gray-300 mr-4">
          Home
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 font-semibold hover:text-gray-300 mr-4">
          Category
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-100 font-semibold hover:text-gray-300">
          Brand
        </a>
      </div>
      <div class="mr-20">
        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Home</a>
      </div>
    </div>
  </nav>
    <div class="absolute top-0 right-0 mt-7 mr-4">
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="font-medium text-white hover:text-indigo-100 focus:outline-none focus:underline transition ease-in-out duration-150"
                    >
                        Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    @yield('content')
@endsection
