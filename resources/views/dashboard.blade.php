<x-app-layout>
@section('styles')
<style>
    table, th, td {
  border:1px solid black;
}
.center{
    text-align:center;
}
</style>
@stop
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
        <a href= "{{route('userCreate')}}">add user</a>
    </x-slot>
    <table>
        <tr>
            <th width="50px"> 
                ID
            </th>
            <th  width= "200px"> 
                Name
            </th>
            <th  width= "200px"> 
                Email
            </th>
            <th width= "150px" class = "center"> 
            </th>
        </tr>        
        @foreach($users as $user)
        <tr>
            <td> 
               {{$user->id}} 
            </td>
            <td> 
               {{$user->name}} 
            </td>
            <td> 
                
               {{$user->email}} 
            </td>
            <td class = "center"> 
                <a href= "{{route('userEdit',$user->id)}}">edit</a> | <a href= "{{route('userDestroy',$user->id)}}">delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>
