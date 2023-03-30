<form>
    <table width="800px" cellspacing="10" cellpadding="10">
        <tr>
            <th colspan="2">

                <label for="search">Search for person &nbsp;</label>
                <input type="text" name="search" value="{{$search}}" style="border:1px solid #ccc; border-radius: 10px;"/>
                <input type="submit" value="Search" style="background: #ccc; border:1px solid #555; border-radius: 10px;"/>
            </th>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <small>Please use values between 1 and 82</small>
            </td>
        </tr>
        <tr>
            <th colspan="2"><hr style="height:2px;border-width:0;color:gray;background-color:gray"></th>
        </tr>
        @if($error)
            <tr>
                <th>ERROR:</th>
                <th><div style="background: #ff0000">{{$error}}</div></th>
            </tr>
        @else
            <tr>
                <td>Name</td>
                <td>@isset($person->name){{ $person->name }}@endisset</td>
            </tr>
            <tr>
                <td>Height</td>
                <td>@isset($person->height){{ $person->height }}@endisset</td>
            </tr>
            <tr>
                <td>Mass</td>
                <td>@isset($person->mass){{ $person->mass }}@endisset</td>
            </tr>
            <tr>
                <td>Hair color</td>
                <td>@isset($person->hair_color){{ $person->hair_color }}@endisset</td>
            </tr>
            <tr>
                <td>Skin color</td>
                <td>@isset($person->skin_color){{ $person->skin_color }}@endisset</td>
            </tr>
            <tr>
                <td>Eye color</td>
                <td>@isset($person->eye_color){{ $person->eye_color }}@endisset</td>
            </tr>
            <tr>
                <td>Birth year</td>
                <td>@isset($person->birth_year){{ $person->birth_year }}@endisset</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>@isset($person->gender){{ $person->gender }}@endisset</td>
            </tr>
        @endif
    </table>
</form>
