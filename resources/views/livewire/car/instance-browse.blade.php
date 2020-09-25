<table class="table-auto w-full">
  <thead>
  <tr>
    <th class="px-8 py-4">Received On</th>
    <th class="px-8 py-4">Sold On</th>
    <th class="">
      <a href="{{ route('cars.instances.create', [$car]) }}" class="btn btn-primary">
        Create Instance
      </a>
    </th>
  </tr>
  </thead>
  <tbody>
  @foreach($instances as $instance)
    <tr>
      <td class="border px-8 py-4">{{ $instance->received_on }}</td>
      <td class="border px-8 py-4">{{ $instance->sold_on }}</td>
      <td class="border p-4">
        <a href="{{ route('cars.instances.show', [$car, $instance]) }}" class="btn btn-info">
          View Instance
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
  <tfoot>
  <tr>
    <td class="p-4" colspan="100%">
      {{ $instances->links() }}
    </td>
  </tr>
  </tfoot>
</table>
