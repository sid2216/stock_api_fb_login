<table>
  <tr>
    <th>symbol</th>
    <th>open</th>
    <th>high</th>
    <th>low</th>
    <th>price</th>
    <th>volume</th>
    <th>latest_trading_day</th>
    <th>previous_close</th>
     <th>change</th>
      <th>change_percent</th>
  </tr>
  @if($stock!='')
  
  <tr>
    <td>{{$stock->symbol}}</td>
    <td>{{$stock->open}}</td>
    <td>{{$stock->high}}</td>
    <td>{{$stock->low}}</td>
    <td>{{$stock->price}}</td>
    <td>{{$stock->volume}}</td>
    <td>{{$stock->latest_trading_day}}</td>
    <td>{{$stock->previous_close}}</td>
    <td>{{$stock->change}}</td>
    <td>{{$stock->change_percent}}</td>

  </tr>
  
  @endif
</table>