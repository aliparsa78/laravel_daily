<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach($post as $post)
    <div class="card">
        <div class="card-header">
            {{$post->title}}
        </div>
        <div class="card-body">
            {{$post->body}}
        </div>
    </div>
    @endforeach
</x-app-layout>
