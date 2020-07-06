<div class="grid-x grid-padding-x">
    <div class="medium-6 medium-offset-3 cell">

        <table class="table-pad-top stack animate__animated animate__fadeInDown">
            <thead>
                <tr>
                    <th width="100">Equation</th>
                    <th width="100">Result</th>
                    <th width="100">Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach($results as $result)
                    <tr class="">
                        <td>{{ $result->first_amount }} {{ $result->operator->operator }} {{ $result->second_amount }}</td>
                        <td>{{ $result->result }}</td>
                        <td>{{ $result->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
