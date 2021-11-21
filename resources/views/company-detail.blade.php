@include('base')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Detailed info :</h4> 
        <h1>{{ $company->name }}</h1>
        <p>Sector : {{ $company->sector }}</p>
        <p>Number of employees: {{ $company->number_of_staff }}</p>
        <p>{{ $company->description }}</p>
        <h3>Contact info</h3>
        <p>{{ $company->contact_mail }}</p>
        <p>{{ $company->contact_phone }}</p>
        <h3>Business info</h3>
        <p>ICO : {{ $company->ICO }}</p>
        <p>DIC : {{ $company->DIC }}</p>
        <br>
        <p>Last updated : {{ $company->updated_at }}</p>
        <br>
        <h3>Job offers :</h3>
        <div class="row">
            <!-- Create new job offer -->
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">{{ $company->name }}    <i class="mdi mdi-plus mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">Create new job offer</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
            </div>
            <!-- Create new job offer - END -->
        @foreach($jobOffers as $jobOffer)
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">{{ $jobOffer->title }}<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $jobOffer->title }}</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
              </div>
        @endforeach
        </div>

    </div>
  </div>
</div>

</div>
</div>

@include('footer')