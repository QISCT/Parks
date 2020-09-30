<table class="table table-condensed table-hover">
 <thead>
  <tr>
   <th>Received On</th>
   <th>Sold On</th>
   <th class="text-right">
    <a href="{{ route('cars.instances.create', [$car]) }}" class="btn btn-sm btn-success">
     Create Instance
    </a>
   </th>
  </tr>
 </thead>
 <tbody>
  @foreach($instances as $instance)
   <tr>
    <td>{{ $instance->received_on }}</td>
    <td>{{ $instance->sold_on }}</td>
    <td class="text-right">
     <a href="{{ route('cars.instances.show', [$car, $instance]) }}" class="btn btn-info">
      View Instance
     </a>
    </td>
   </tr>
  @endforeach
 </tbody>
 <caption class="p-3">
  {{ $instances->links() }}
 </caption>
</table>
