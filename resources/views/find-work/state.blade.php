<table>
    <thead>
        <tr>
            <td>Contractor</td>
            <td>Local</td>
            <td>Start Date</td>
        </tr>
    </thead>
    <tbody>
        @foreach( $jobs as $job )
            <tr>
                <td>{{ $job['title'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@if( ! $jobs )
    <div>Sorry, it looks like we couldn't find any jobs in {{ ucfirst($state) }}.</div>
@endif
