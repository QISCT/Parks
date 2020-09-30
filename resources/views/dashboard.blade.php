<x-app-layout>
 <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
   Dashboard
  </h2>
 </x-slot>
 <div class="row">
  <div class="col-xl-7 mb-3 mb-xl-4">
   <div class="card card-body h-100 border-0">
    visual stuff
   </div>
  </div>
  <div class="col-xl">
   <div class="card card-body border-0 mb-3 mb-xl-4 p-3">
    <div class="row align-items-center">
     <div class="col-sm-4 text-center">
      <div class="display-3">14</div>
      <strong class="d-block text-uppercase">New vehicles</strong>
     </div>
     <div class="col-sm text-center">
      <p>
       <a href="#" class="btn btn-dark btn-sm">View Inventory</a>
      </p>
      <small class="text-secondary d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit</small>
      <hr />
      <div class="d-flex">
       <div class="flex-fill small text-secondary">
        <strong>87</strong>
        <label class="d-block">Available</label>
       </div>
       <div class="flex-fill small text-secondary">
        <strong>22</strong>
        <label class="d-block">Deal Pending</label>
       </div>
       <div class="flex-fill small text-secondary">
        <strong>8</strong>
        <label class="d-block">On Consignment</label>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-6 mb-3 mb-xl-4">
     <div class="bg-gradient-success border-0 text-light h-100 card card-body p-3">
      <div class="flex-fill mb-2">
       <div class="mb-3">
        <span class="fad fa-coins fa-fw ml-n1 mr-1 fa-lg"></span>
        <strong>Sales Revenue</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>Today</span>
        <strong>$94,054</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>Last 7 Days</span>
        <strong>$841,284</strong>
       </div>
      </div>
      -- insert graph --
     </div>
    </div>
    <div class="col-md-6 mb-3 mb-xl-4">
     <div class="bg-gradient-cyan border-0 text-light h-100 card card-body p-3">
      <div class="flex-fill mb-2">
       <div class="mb-3">icon + title</div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>label</span>
        <strong>value</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>label</span>
        <strong>value</strong>
       </div>
      </div>
      <div class="progress mb-3 mb-xl-4" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
     </div>
    </div>
    <div class="col-md-6 mb-3 mb-xl-4">
     <div class="bg-gradient-danger border-0 text-light h-100 card card-body p-3">
      <div class="flex-fill mb-2">
       <div class="mb-3">
        <span class="fad fa-tools fa-fw ml-n1 mr-1 fa-lg"></span>
        <strong>Work Order Progress</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>Completed</span>
        <strong>4,251</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>Total</span>
        <strong>4,303</strong>
       </div>
      </div>
      <div class="progress mb-3 mb-xl-4" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
     </div>
    </div>
    <div class="col-md-6 mb-3 mb-xl-4">
     <div class="bg-gradient-warning border-0 text-light h-100 card card-body p-3">
      <div class="flex-fill mb-2">
       <div class="mb-3">icon + title</div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>label</span>
        <strong>value</strong>
       </div>
       <div class="small d-flex justify-content-between align-items-center mb-1">
        <span>label</span>
        <strong>value</strong>
       </div>
      </div>
      <div class="progress mb-3 mb-xl-4" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" style="height: 7px;">
       <div class="progress-bar bg-light" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 {{-- <div class="row">
  <div class="col-sm-6 col-xl-3 mb-3 mb-xl-4">
   <div class="bg-warning d-flex text-white align-items-center rounded">
    <div class="p-3">
     <span class="fal fa-cars fa-2x"></span>
    </div>
    <div class="pl-1 pt-3 pb-3 pr-3">
     <div class="mb-n2 h4 font-weight-bold">123</div>
     more things
    </div>
   </div>
  </div>
  <div class="col-sm-6 col-xl-3 mb-3 mb-xl-4">
   <div class="bg-cyan d-flex text-white align-items-center rounded">
    <div class="p-3">
     <span class="fal fa-cars fa-2x"></span>
    </div>
    <div class="pl-1 pt-3 pb-3 pr-3">
     <div class="mb-n2 h4 font-weight-bold">123</div>
     more things
    </div>
   </div>
  </div>
  <div class="col-sm-6 col-xl-3 mb-3 mb-xl-4">
   <div class="bg-teal d-flex text-white align-items-center rounded">
    <div class="p-3">
     <span class="fal fa-cars fa-2x"></span>
    </div>
    <div class="pl-1 pt-3 pb-3 pr-3">
     <div class="mb-n2 h4 font-weight-bold">123</div>
     more things
    </div>
   </div>
  </div>
  <div class="col-sm-6 col-xl-3 mb-3 mb-xl-4">
   <div class="bg-red d-flex text-white align-items-center rounded">
    <div class="p-3">
     <span class="fal fa-cars fa-2x"></span>
    </div>
    <div class="pl-1 pt-3 pb-3 pr-3">
     <div class="mb-n2 h4 font-weight-bold">123</div>
     more things
    </div>
   </div>
  </div>
 </div> --}}
 <div class="row">
  <div class="col-md mb-3 mb-xl-4">
   to do list
  </div>
  <div class="col-md mb-3 mb-xl-4">
   quick settingfs
   <hr />
   meters
  </div>
  <div class="col-lg mb-3 mb-xl-4">
   calendar
  </div>
 </div>
 <div class="card card-body">
  table to display recent activity
 </div>
</x-app-layout>
