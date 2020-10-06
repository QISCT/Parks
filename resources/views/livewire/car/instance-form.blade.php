<div>
  <form id="update-form" wire:submit.prevent="save">
    <div class="form-label-group">
      <input type="text" id="received_on" wire:model="received_on" class="form-control @error('received_on') is-invalid @enderror" placeholder="Received On">
      <label for="received_on">Received On</label>
      @error('received_on') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="sold_on" wire:model="sold_on" class="form-control @error('sold_on') is-invalid @enderror" placeholder="Sold On">
      <label for="sold_on">Sold On</label>
      @error('sold_on') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    
    <div class="form-label-group">
      <input type="number" id="cost_orig" wire:model="cost_orig" class="form-control @error('cost_orig') is-invalid @enderror" placeholder="Cost Original">
      <label for="cost_orig">Cost Original</label>
      @error('cost_orig') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="number" id="cost_est" wire:model="cost_est" class="form-control @error('cost_est') is-invalid @enderror" placeholder="Cost Estimate">
      <label for="cost_est">Cost Estimate</label>
      @error('cost_est') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="number" id="cost_repair" wire:model="cost_repair" class="form-control @error('cost_repair') is-invalid @enderror" placeholder="Cost Repair">
      <label for="cost_repair">Cost Repair</label>
      @error('cost_repair') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="number" id="cost_floor" wire:model="cost_floor" class="form-control @error('cost_floor') is-invalid @enderror" placeholder="Cost Floor">
      <label for="cost_floor">Cost Floor</label>
      @error('cost_floor') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="number" id="cost_total" wire:model="cost_total" class="form-control @error('cost_total') is-invalid @enderror" placeholder="Cost Total">
      <label for="cost_total">Cost Total</label>
      @error('cost_total') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="number" id="cost_sugg" wire:model="cost_sugg" class="form-control @error('cost_sugg') is-invalid @enderror" placeholder="Cost Suggested">
      <label for="cost_sugg">Cost Suggested</label>
      @error('cost_sugg') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    
    <div class="form-label-group">
      <input type="text" id="status" wire:model="status" class="form-control @error('status') is-invalid @enderror" placeholder="Status">
      <label for="status">Status</label>
      @error('status') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="status" wire:model="cond" class="form-control @error('cond') is-invalid @enderror" placeholder="Condition">
      <label for="cond">Condition</label>
      @error('cond') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
  </form>
</div>
