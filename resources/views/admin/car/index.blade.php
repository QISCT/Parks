<style>
 @media screen and (min-width: 768px) {
  .collapse:not(.show) {
   display: block!important;
  }
  .columnCount {
   display: flex;
   flex-wrap: wrap;
   align-items: flex-start;
  }
  .columnCount .carRecord {
   flex: 0 0 25%;
   max-width: 25%;
  }
  .columnCount .card:not(.carRecord) {
   flex: 0 0 100%;
   max-width: 100%;
  }
 }
 .carRecord {
  position: relative;
 }
 .carTitle [class*='border-'] {
  position: absolute;
  right: 0;
  top: 0;
  width: 100px;
  height: 100px;
  text-align: center;
  z-index: 10;
 }
 .carTitle [class*='border-']:before {
  border-color: rgba(0, 0, 0, 0) var(--secondary) rgba(0, 0, 0, 0)!important;
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 100px 100px 0;
 }
 .carTitle .border-primary:before {
  border-color: rgba(0, 0, 0, 0) var(--primary) rgba(0, 0, 0, 0)!important;
 }
 .carTitle .border-success:before {
  border-color: rgba(0, 0, 0, 0) var(--success) rgba(0, 0, 0, 0)!important;
 }
 .carTitle .border-info:before {
  border-color: rgba(0, 0, 0, 0) var(--info) rgba(0, 0, 0, 0)!important;
 }
 .carTitle .border-warning:before {
  border-color: rgba(0, 0, 0, 0) var(--warning) rgba(0, 0, 0, 0)!important;
 }
 .carTitle .border-danger:before {
  border-color: rgba(0, 0, 0, 0) var(--danger) rgba(0, 0, 0, 0)!important;
 }
 .carTitle [class*='border-'] span {
  position: absolute;
  display: block;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-weight: 400;
  width: 100%;
  height: 100%;
  line-height: 110px;
  transform: rotate(45deg) translate(0, -25%);
 }
</style>
<x-app-layout>
 <x-slot name="header">
  <h1>
   Inventory
  </h1>
  <a class="btn btn-primary" href="{{ route('cars.create') }}">
   Create Car
  </a>
 </x-slot>
 <div class="mb-3 d-flex flex-nowrap justify-content-between align-items-center">
  <nav aria-label="breadcrumb">
   <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item">
     <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
     Inventory
    </li>
   </ol>
  </nav>
  <div class="d-md-none">
   <button class="btn btn-light filterToggle">
    <span class="fas fa-filter"></span>
   </button>
  </div>
  <div class="d-none d-lg-inline">
   <div class="btn-group btn-group-toggle" data-toggle="buttons" role="group" aria-label="Basic example">
    <label class="btn btn-secondary">
     <input type="radio" name="options" id="option3">  <i class="fal fa-align-justify"></i>
    </label>
    <label class="btn btn-secondary active">
     <input type="radio" name="options" id="option1" checked> <i class="fal fa-align-left"></i>
    </label>
    <label class="btn btn-secondary">
     <input type="radio" name="options" id="option2">  <i class="fal fa-align-right"></i>
    </label>
   </div>
   <div class="btn-group btn-group-toggle" data-toggle="buttons" role="group" aria-label="Basic example2">
    <label class="btn btn-secondary">
     <input type="radio" name="options" class="cardToggler" id="option4">  <i class="fad fa-th"></i>
    </label>
    <label class="btn btn-secondary active">
     <input type="radio" name="options" class="cardToggler" id="option5" checked>  <i class="fad fa-list"></i>
    </label>
   </div>
  </div>
 </div><!-- /breadcrumbs and filter view -->
 <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap">
  <div class="form-row align-items-center">
   <div class="col-auto">
    <label class="mb-0">Sort By:</label>
   </div>
   <div class="col">
    <select class="form-control">
     <option selected>Name</option>
     <option>Price Ascending</option>
    </select>
   </div>
  </div>
  <div class="d-flex">
   <a href="#" class="btn btn-secondary disabled rounded-0 ">
    <span class="fal fa-angle-left"></span>
   </a>
   <label class="flex-column pl-2 pr-2 justify-content-center align-content-center d-flex mb-0 font-weight-bold">Page 1 of Many</label>
   <a href="#" class="btn btn-secondary rounded-0">
    <span class="fal fa-angle-right"></span>
   </a>
  </div>
  <div class="ml-auto mr-auto ml-sm-0 mr-sm-0">
   <a href="#" class="btn btn-dark btn-sm">Reset Filters</a>
  </div>
 </div><!-- /sort by, pagination and reset btn -->
 <div class="row rearranged">
  <div class="col-lg-3 filterBlock collapse">
   <div class="row">
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Years</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Makes</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Models</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Body Styles</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Mileage</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Transmissions</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Fuel Economies</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Conditions</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Locations</option>
     </select>
    </div>
    <div class="col-md-4 col-lg-12 child mb-2">
     <select name="" id="" class="form-control">
      <option selected>All Prices</option>
     </select>
    </div>
   </div>
  </div>
  <div class="col-lg" id="inventoryChange">


   <div class="card border-0 shadow-sm mb-3 carRecord">
    <div class="d-flex flex-nowrap carTitle">
     <div class="h4 p-2 mb-0">2020 Lincoln MK Coach Legacy</div>
     <div class="border-success text-white">
      <span>New</span>
     </div>
    </div>
    <div class="d-flex flex-nowrap alternator">
     <div class="d-flex flex-column align-items-center justify-content-center bg-light p-5 text-black-50">Replace with image</div>
     <div class="carStats d-lg-flex flex-fill flex-wrap">
      <div class="p-3 flex-fill small">
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Body Style:</label></div>
        <div class="col text-truncate">Sport Utility Vehicle</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Drivetrain:</label></div>
        <div class="col text-truncate">4WD</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Engine:</label></div>
        <div class="col text-truncate">4.8L V8</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Transmission:</label></div>
        <div class="col text-truncate">8-Speed Tiptronic</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Mileage:</label></div>
        <div class="col text-truncate">19,585</div>
       </div>
      </div>
      <div class="p-3 flex-fill small d-none d-lg-block">
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Body Style:</label></div>
        <div class="col text-truncate">Sport Utility Vehicle</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Drivetrain:</label></div>
        <div class="col text-truncate">4WD</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Engine:</label></div>
        <div class="col text-truncate">4.8L V8</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Transmission:</label></div>
        <div class="col text-truncate">8-Speed Tiptronic</div>
       </div>
       <div class="form-row flex-nowrap mb-1">
        <div class="col"><label class="d-block font-weight-bold mb-0">Mileage:</label></div>
        <div class="col text-truncate">19,585</div>
       </div>
      </div>
      <div class="border">here</div>
     </div>
    </div>
   </div>

   <div class="card card-body">
    <livewire:car.car-browse />
   </div>
  </div>
 </div>
</x-app-layout>

<script>
 $(document).ready(function(){
  $('.filterToggle').click(function(event) {
   $('.filterBlock').toggleClass('show');
  });
  $('#option3').click(function(event) {
   $('.filterBlock').removeClass('col-lg-3').removeClass('order-lg-2').addClass('col-lg-12');
   $('.filterBlock + div').removeClass('order-lg-1');
   $('.filterBlock .child').removeClass('col-lg-12');
  });
  $('#option1').click(function(event) {
   $('.filterBlock').addClass('col-lg-3').removeClass('order-lg-2').removeClass('col-lg-12');
   $('.filterBlock + div').removeClass('order-lg-1');
   $('.filterBlock .child').addClass('col-lg-12');
  });
  $('#option2').click(function(event) {
   $('.filterBlock').addClass('order-lg-2');
   $('.filterBlock + div').addClass('order-lg-1');
   $('.filterBlock .child').addClass('col-lg-12');
  });
  $('.cardToggler').click(function(event) {
   $('#inventoryChange .alternator').toggleClass('flex-column');
   $('#inventoryChange').toggleClass('columnCount');
  });
 })
</script>

