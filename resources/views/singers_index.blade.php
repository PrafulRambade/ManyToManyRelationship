<table border="1" style="width:100%">
    <tr>
        <th>Song Name</th>
        <th>Song Singer</th>
    </tr>
    @foreach($singer_data as $all_data)
    <tr>
        <td>{{$all_data->name}}</td>
        <td>{{$all_data->songs->implode('title', ', ') }}</td>
    </tr>
    @endforeach
</table>