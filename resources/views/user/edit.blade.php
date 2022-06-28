<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{$action=='edit'? route('userUpdate', $user->id): route('userStore')}}">
    @csrf
  <label for="name">name:</label><br>
  <input type="text" id="name" name="name" value="{{$user->name ?? ''}}"><br>
  <label for="email">email:</label><br>
  <input type="email" id="email" name="email" value="{{$user->email ?? ''}}"><br>
  <label for="password">password:</label><br>
  <input type="password" id="password" name="password" value="{{$user->password ?? ''}}"><br><br>
  <input type="submit" value="Submit">
</form>
</x-app-layout>
