@extends('operations.operations_app')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Invetigation Form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form enctype="multipart/form-data" action="{{url('Investigation_Report')}}" method="post" >
                                    @csrf
                                <div class="row form-group">
                                    <div class="col col-md-4">

                                        <label for="incident_id" class=" form-control-label">Incident Number</label>
                                        <select name="incident_id" id="incident_id" class="form-control">
                                            @foreach ($incidents as $incidents)
                                     <option style.display = 'none' value="{{ $incidents->incident_id}}">{{$incidents->incident_id}}</option>

                                    @endforeach
                                        </select>
                                        {{-- <input type="text" id="incident_id"  name="incident_id" placeholder="Select Incident Number" class="form-control" required> --}}

                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="textarea-input" class=" form-control-label">Investigation Statement  Report</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="investiagtion_statement" id="investiagtion_statement" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="textarea-input" class=" form-control-label">Investigation Recomendation</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="investiagtion_recomendation" id="investiagtion_recomendation" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="investigation_status" id="investigation_status" class="form-control">
                                            <option value="0">Open Investiagtion</option>
                                            <option value="1">Recomendation</option>
                                            <option value="2">Final Report</option>
                                        </select>
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
</div>

@endsection
