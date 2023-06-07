<!DOCTYPE html>
<html>
<head>
    <title>Covid Data</title>
</head>
<body>
    <h1>Covid Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>CountryCode</th>
                <th>Slug</th>
                <th>NewConfirmed</th>
                <th>TotalConfirmed</th>
                <th>NewDeaths</th>
                <th>TotalDeaths</th>
                <th>NewRecovered</th>
                <th>TotalRecovered</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($data as $key => $value)
        <tr>
            <td>{{ $data['ID'] }}</td>
            <td>{{ $data['Message'] }}</td>
            <td>{{ $data['Global'] }}</td>
            <td>{{ $data['Countries'] }}</td>
            
        </tr>
    @endforeach
</tbody>

    </table>
</body>
</html>