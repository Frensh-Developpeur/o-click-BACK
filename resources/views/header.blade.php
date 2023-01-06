<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<form class="flex justify-end m-2" method="POST" action="{{ route('logout') }}">
    @csrf
    <a  :href="route('logout')"
        class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Déconnexion') }}
    </a>
</form>
