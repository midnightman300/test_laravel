<tr>
    <td align="center">{{$actor->first_name}}</td>
    <td align="center">{{$actor->last_name}}</td>
    <td align="center">{{$actor->birthdate}}</td>
    <td align="center">
        @foreach ($actor->movies as $movie)
            @include('movie.short', ['movie' => $movie, 'last' => $loop->last])
        @endforeach
    </td>
</tr>
