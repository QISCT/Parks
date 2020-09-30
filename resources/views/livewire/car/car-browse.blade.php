<table class="table-auto w-full">
  <thead>
  <tr>
    <th class="px-8 py-4">Created At</th>
    <th class="px-8 py-4">VIN</th>
    <th class="px-8 py-4">Year</th>
    <th class="px-8 py-4">OEM</th>
    <th class="px-8 py-4">MFG</th>
    <th class="px-8 py-4">Instances</th>
    <th class=""></th>
  </tr>
  </thead>
  <tbody>
  @foreach($cars as $car)
    <tr>
      <td class="border px-8 py-4">{{ $car->created_at->format('Y-m-d') }}</td>
      <td class="border px-8 py-4">{{ $car->vin }}</td>
      <td class="border px-8 py-4">{{ $car->year }}</td>
      <td class="border px-8 py-4">{{ $car->oem->name }}</td>
      <td class="border px-8 py-4">{{ $car->mfg->name }}</td>
      <td class="border px-8 py-4">{{ $car->car_instances->count() }}</td>
      <td class="border p-4">
        <a href="{{ route('cars.show', $car) }}" class="btn btn-sm btn-info">
          View Car
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
  <tfoot>
  <tr>
    <td class="p-4" colspan="100%">
      {{ $cars->links() }}
    </td>
  </tr>
  </tfoot>
</table>
