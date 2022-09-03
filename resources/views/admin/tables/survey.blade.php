@foreach ($historyList as $key => $hl)
    @if ($loop->first)
        <table class="table">
            <tr>
                <th>Idea Generation</th>
                <th>Idea Promotion</th>
                <th>Idea Realization</th>
                <th>Intensi Berinovasi</th>
                <th>Family Expectations For Creativity</th>
                <th>Risk Of Tolerance</th>
                <th>Openness To External Knowledge</th>
                <th>Family Expectations For Creativity</th>
                <th>Leader Expectations For Creativity</th>
                <th>Customer Expectations For Creativity</th>
                <th>Personal Assumptions/beliefs About Own Creativity</th>
                <th>Evidence-based Assessment Of Creative Self-efficacy</th>
                <th>Commitment To Learning</th>
                <th>Shared Vision</th>
                <th>Open-mindedness</th>
                <th>Intraorganizational Knowledge Sharing</th>
                <th>Intrinsic Motivation</th>
                <th>Identified Regulation</th>
                <th>Waktu</th>
            </tr>
    @endif
    <tr>
        <td>{{ $hl['dimensi']['Idea Generation'] }}</td>
        <td>{{ $hl['dimensi']['Idea Promotion'] }}</td>
        <td>{{ $hl['dimensi']['Idea Realization'] }}</td>
        <td>{{ $hl['dimensi']['Intensi Berinovasi'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Risk Of Tolerance'] }}</td>
        <td>{{ $hl['dimensi']['Openness To External Knowledge'] }}</td>
        <td>{{ $hl['dimensi']['Family Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Leader Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Customer Expectations For Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Personal Assumptions/beliefs About Own Creativity'] }}</td>
        <td>{{ $hl['dimensi']['Evidence-based Assessment Of Creative Self-efficacy'] }}</td>
        <td>{{ $hl['dimensi']['Commitment To Learning'] }}</td>
        <td>{{ $hl['dimensi']['Shared Vision'] }}</td>
        <td>{{ $hl['dimensi']['Open-mindedness'] }}</td>
        <td>{{ $hl['dimensi']['Intraorganizational Knowledge Sharing'] }}</td>
        <td>{{ $hl['dimensi']['Intrinsic Motivation'] }}</td>
        <td>{{ $hl['dimensi']['Identified Regulation'] }}</td>
        <td>{{ $hl['updated_at'] }}</td>
    </tr>
    @if ($loop->last)
        </table>
    @endif
@endforeach
