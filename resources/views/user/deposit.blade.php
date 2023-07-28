<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Type</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
        @foreach($deposits as $deposit)
           @if($deposit->transaction_type=='deposit')
                   <tr>
                       <th scope="row">{{$loop->iteration}}</th>
                       <td>{{$deposit->transaction_type}}</td>
                       <td>{{$deposit->amount}}</td>
                       <td>{{$deposit->date}}</td>
                   </tr>
           @endif
        @endforeach
       </table>
