
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <h2 style="color:rgb(255, 0, 162);font-size;" >{{ Auth::user()->name }}<b>Security Incident Report  </b></h2>
                        <h4 style="color:rgb(255, 0, 149);font-size;">Email: <span>{{ Auth::user()->email }}</span></h4>
                        <h4 style="color:rgb(255, 0, 149);font-size;">Helpline: <span>_________</span></h4>
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
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Reported Incident</h3>
                            </div>
                            <hr>
            <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                        <th>OB Reference Number</th>
                        <th>Reported BY Guard</th>
                        <th>Incident Type</th>
                        <th>Incident Description</th>
                        <th>Parties Involved</th>
                        <th>Incident Witness</th>
                        <th>Date Reported</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($incidences  as $incidence)
                    <tr>
                        <td>{{$incidence->incident_id}}</td>
                        <td class="process">{{$incidence->user_id}}</td>
                        <td>{{$incidence->incident_type}}</td>
                        <td>{{$incidence->incident_description}}</td>
                        <td>{{$incidence->name_of_parties_involved}}</td>
                        <td>{{$incidence->name_of_witness}}</td>
                        <td class="denied">{{$incidence->created_at}}</td>

                    <tr>
                        @endforeach

                    </tbody>
                </table>

              </div>

              <hr>

              <div class="card-header">
                <h3 class="card-title">  Investigations Done on the Incident</h3>

              <hr>

              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                        <th>Investigation Carried By</th> |
                        <th>Investigation Statement</th> |
                        <th>Investigation Recomendation</th> |
                        <th>Investigation Status</th> |

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($investigations  as $investigation)
                    <tr>
                        <td class="process">{{$investigation->user_id}}</td>
                        <td>{{$investigation->investiagtion_statement}}</td>
                        <td>{{$investigation->investiagtion_recomendation}}</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              @if ($investigation->investigation_status==1)
                              <a class="btn btn-danger" href="#">Open Investiagtion

                                  </a>
                                  @elseif($investigation->investigation_status==2)
                                  <a class="btn btn-info" href="#">Recomendation

                                </a>
                                   @else
                                  <a class="btn btn-warning" href="#">Final Report

                                  </a>
                                  @endif

                               </div>

                          </td>

                    <tr>
                        @endforeach

                    </tbody>
                </table>
              </div>


            </div>
            <!-- /.card -->

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

