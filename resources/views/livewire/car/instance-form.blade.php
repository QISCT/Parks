<form id="update-form" wire:submit.prevent="save">
 <div class="form-label-group mb-3">
  <input type="text" id="received_on" wire:model="received_on" class="form-control @error('received_on') is-invalid @enderror" placeholder="Received On">
  <label for="received_on">Received On</label>
  @error('received_on') <div class="invalid-feedback m-0 d-flex flex-column align-items-center"><span>{{ $message }}</span></div> @enderror
 </div>
 <div class="form-label-group mb-3">
  <input type="text" id="sold_on" wire:model="sold_on" class="form-control @error('sold_on') is-invalid @enderror" placeholder="Sold On">
  <label for="sold_on">Sold On</label>
  @error('sold_on') <div class="invalid-feedback m-0 d-flex flex-column align-items-center"><span>{{ $message }}</span></div> @enderror
 </div>
</form>
