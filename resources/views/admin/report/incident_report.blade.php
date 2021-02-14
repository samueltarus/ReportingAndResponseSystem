
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <h2 style="color:rgb(255, 0, 162);font-size;" ><b>Lavington Security Incident Report </b></h2>
                        <h4 style="color:rgb(255, 0, 149);font-size;">Email: <span>info@lavingtonsecurity.co.ke</span></h4>
                        <h4 style="color:rgb(255, 0, 149);font-size;">Helpline: <span>0797093681</span></h4>
                        <h4 style="color:rgb(255, 0, 149);font-size;">P.BOX : <span>Nairobi</span></h4>
                        <h4 style="color:rgb(255, 0, 149);font-size;">Incident <b>Reports</b></h4>

                    </div>

					<div class="col-sm-6">
                    {{-- <a href="{{url('add-product')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add Product</span></a> --}}
						{{-- <a href="{{url('all-categories')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Manage Category</span></a> --}}
					</div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">This Dcoument is valid with partners attach with a stamp</strong>
                        </div>
                        <div class="card-body">
                            {{-- <p class="card-text">Incident  Brief Description Before Investigation being DOne
                            </p> --}}
                        </div>
                    </div>
                </div>
                <hr>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>OB Number</th>
                                    <th>Incident Type</th>
                                    <th >Incident Decription</th>
                                    <th>Reported By</th>
                                    <th >Incident Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidence as $incidence)

                                <tr>
                                    <td>{{$incidence->incident_id}}</td><br>

                                    <td>{{$incidence->incident_type}}</td><br>
                                    <td>{{$incidence->incident_description}}</td><br>
                                    <td>{{$incidence->user_id}}</td><br>
                                    <td>{{$incidence->created_at}}</td><br>

                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <hr>
            <h3>Signatures :</h3>

            <h4>Human Resource Manager</h4>
            <h4>....................</h4>

            <h4>Operaton Manager</h4>
            <h4>................</h4>

        </div>
    </div>
</div>

