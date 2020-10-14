
<form id="update-form" wire:submit.prevent="save">
 <div class="flex-sm-nowrap flex-lg-wrap row">
  <div class="mb-2 mb-sm-3 col-sm col-lg-12 col-xl-5">
   <div class="row">
    <div class="mb-2 mb-sm-3 col-md-6 col-lg-3 col-xl-6">
     <div class="form-label-group d-block position-relative">
      <input type="text" id="received_on" wire:model="received_on" class="form-control mw-100 mr-0 d-block @error('received_on') is-invalid @enderror" placeholder="Received On">
      <label class="mw-100 mr-0 mb-0 d-block" for="received_on">Received On</label>
      @error('received_on') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
     </div>
    </div>
    <div class="mb-2 mb-sm-3 col-md-6 col-lg-3 col-xl-6">
     <div class="form-label-group d-block position-relative">
      <input type="text" id="sold_on" wire:model="sold_on" class="form-control mw-100 mr-0 d-block @error('sold_on') is-invalid @enderror" placeholder="Sold On">
      <label class="mw-100 mr-0 mb-0 d-block" for="sold_on">Sold On</label>
      @error('sold_on') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
     </div>
    </div>
    <div class="mb-2 mb-sm-3 col-md-6 col-lg-3 col-xl-6">
     <div class="form-label-group d-block position-relative">
      <input type="text" id="status" wire:model="status" class="form-control mw-100 mr-0 d-block @error('status') is-invalid @enderror" placeholder="Status">
      <label class="mw-100 mr-0 mb-0 d-block" for="status">Status</label>
       @error('status') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
     </div>
    </div>
    <div class="mb-2 mb-sm-3 col-md-6 col-lg-3 col-xl-6">
     <div class="form-label-group d-block position-relative">
      <input type="text" id="status" wire:model="cond" class="form-control mw-100 mr-0 d-block @error('cond') is-invalid @enderror" placeholder="Condition">
      <label class="mw-100 mr-0 mb-0 d-block" for="cond">Condition</label>
       @error('cond') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
     </div>
    </div>
   </div>
  </div>
  <div class="mb-2 mb-sm-3 col-sm-4 col-lg-12 col-xl-7">
   <div class="row flex-wrap">
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
       <input type="number" id="cost_orig" wire:model="cost_orig" class="form-control mw-100 mr-0 d-block @error('cost_orig') is-invalid @enderror" placeholder="Cost Original">
       <label class="mw-100 mr-0 mb-0 d-block" for="cost_orig">Original</label>
      </div>
     </div>
     @error('cost_orig') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
       <input type="number" id="cost_est" wire:model="cost_est" class="form-control mw-100 mr-0 d-block @error('cost_est') is-invalid @enderror" placeholder="Cost Estimate">
       <label class="mw-100 mr-0 mb-0 d-block" for="cost_est">Estimate</label>
      </div>
     </div>
     @error('cost_est') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
       <input type="number" id="cost_repair" wire:model="cost_repair" class="form-control mw-100 mr-0 d-block @error('cost_repair') is-invalid @enderror" placeholder="Cost Repair">
       <label class="mw-100 mr-0 mb-0 d-block" for="cost_repair">Repair</label>
      </div>
     </div>
     @error('cost_repair') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
       <input type="number" id="cost_floor" wire:model="cost_floor" class="form-control mw-100 mr-0 d-block @error('cost_floor') is-invalid @enderror" placeholder="Cost Floor">
       <label class="mw-100 mr-0 mb-0 d-block" for="cost_floor">Floor</label>
      </div>
     </div>
     @error('cost_floor') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
       <input type="number" id="cost_total" wire:model="cost_total" class="form-control mw-100 mr-0 d-block @error('cost_total') is-invalid @enderror" placeholder="Cost Total">
       <label class="mw-100 mr-0 mb-0 d-block" for="cost_total">Total</label>
      </div>
     </div>
     @error('cost_total') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="mb-2 mb-sm-3 col-md-12 col-lg-4 col-xl-6 col-auto">
     <div class="input-group d-flex flex-nowrap">
      <div class="input-group-prepend">
       <span class="input-group-text">
        <span class="fal fa-dollar-sign"></span>
       </span>
      </div>
      <div class="form-label-group d-block position-relative">
      <input type="number" id="cost_sugg" wire:model="cost_sugg" class="form-control mw-100 mr-0 d-block @error('cost_sugg') is-invalid @enderror" placeholder="Cost Suggested">
      <label class="mw-100 mr-0 mb-0 d-block" for="cost_sugg">Suggested</label>
      </div>
     </div>
     @error('cost_sugg') <div style="z-index:1" class="position-absolute invalid-feedback ml-0 d-flex justify-content-center align-items-center flex-column mt-0"><span>{{ $message }}</span></div> @enderror
    </div>
   </div>
  </div>
 </div>


</form>
