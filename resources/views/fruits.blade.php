@foreach ($fruits as $fruit)
    {{ $fruit->name }}
   RM {{ $fruit->price }}
@endforeach

