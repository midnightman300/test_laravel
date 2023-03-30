<form>
    <table width="800px" cellspacing="10" cellpadding="10">
        <tr>
            <th colspan="4">

                <label for="search">Search for actors &nbsp;</label>
                <input type="text" name="search" value="{{$search}}" style="border:1px solid #ccc; border-radius: 10px;"/>
                <input type="submit" value="Search" style="background: #ccc; border:1px solid #555; border-radius: 10px;"/>
            </th>
        </tr>
        <tr>
            <th colspan="4"><hr style="height:2px;border-width:0;color:gray;background-color:gray"></th>
        </tr>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            <th>Movies</th>
        </tr>
        @foreach ($actors as $actor)
            @include('actor.show', ['actor' => $actor])
        @endforeach
    </table>
</form>
