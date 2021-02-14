@extends('guards.guards_app')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Incident Form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('send-report-incident')}}" method="post" >
                                    @csrf
                                <div class="row form-group">
                                    <div class="col col-md-4">

                                        <label for="incident_type" class=" form-control-label">Incident Type</label>
                                        <input type="text" id="incident_type"  name="incident_type" placeholder="Enter Incident Type" class="form-control" required>

                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">

                                        <label for="incident_date"  class=" form-control-label">Date of Incident</label>
                                        <input type="text" id="incident_date"  name="incident_date" placeholder="Enter Incident Date" class="form-control" required>

                                    </div>

                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="textarea-input" class=" form-control-label">Incident Descrption</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="incident_description" id="incident_description" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">

                                        <label for="name_of_parties_involved"  class=" form-control-label">Name/Contact of parties Involved</label>
                                        <input type="text" id="name_of_parties_involved"  name="name_of_parties_involved" placeholder="Enter Parties Involved" class="form-control" required>

                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">

                                        <label for="name_of_witness"  class=" form-control-label">Name/Contact of Witness</label>
                                        <input type="text" id="name_of_witness"  name="name_of_witness" placeholder="Enter Witness" class="form-control" required>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>

    </div>

</div>
</div>

@endsection
