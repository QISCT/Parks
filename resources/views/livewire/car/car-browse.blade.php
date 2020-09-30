<table class="table table-condensed table-hover table-sm">
 <thead>
  <tr>
   <th class="border-0">VIN</th>
   <th class="border-0">Year</th>
   <th class="border-0">OEM</th>
   <th class="border-0">MFG</th>
   <th class="border-0">Instances</th>
   <th class="border-0">Created At</th>
   <th class="border-0"></th>
  </tr>
 </thead>
 <tbody>
  @foreach($cars as $car)
   <tr>
    <td>
     <a href="{{ route('cars.show', $car) }}">
      {{ $car->vin }}
     </a>
    </td>
    <td>{{ $car->year }}</td>
    <td>{{ $car->oem->name }}</td>
    <td>{{ $car->mfg->name }}</td>
    <td>{{ $car->car_instances->count() }}</td>
    <td>{{ $car->created_at->format('Y-m-d') }}</td>
    <td class="text-right">
     <a href="{{ route('cars.show', $car) }}" class="btn btn-sm btn-info">
      View Car
     </a>
    </td>
   </tr>
  @endforeach
 </tbody>
 <caption class="pl-3 pr-3 mb-n3 pb-0">
  {{ $cars->links() }}
 </caption>
</table>
