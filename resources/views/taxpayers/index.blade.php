<x-default-layout>

    @section('title')
        Taxpayer
    @endsection

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Taxpayer" id="search"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!-- Modal begin -->

           

            <!-- Modal -->
            <div class="modal fade TModal" id="TaxpayerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Taxpayer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
        <form id="taxpayerForm">
  
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="">
                <span id="nameError" class="text-danger error-messages"></span>
            </div>
            <div class="form-group">
                <label for="number">phone Number</label>
                <input type="number" class="form-control" name="phone_number" placeholder="080..">
                <span id="phoneError" class="text-danger error-messages"></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@gmail.com">
                <span id="emailError" class="text-danger error-messages"></span>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                <span id="addError" class="text-danger error-messages"></span>
            </div>
            <div class="form-group">
                <label for="inputAddress">Taxpayer Type</label>
                <select name="taxpayer_type" class="form-control">
                    <option selected>Choose...</option>
                    <option>Individual</option>
                    <option>Corporate</option>
                    <option>Government</option>
                </select>
                <span id="TaxtypeError" class="text-danger error-messages"></span>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputZip">Ward</label>
                <input type="text" class="form-control" name="ward">
                <span id="wardError" class="text-danger error-messages"></span>
                </div>
                <div class="form-group col-md-4">
                <label for="lga">LGA</label>
                <input type="text" class="form-control" name="lga">
                <span id="lgaError" class="text-danger error-messages"></span>
                </div>
                <div class="form-group col-md-5">
                <label for="inputState">State</label>
                <select name="state" class="form-control">
                    <option selected>Choose...</option>
                     <option>FCT</option>
                    <option>Abia</option>
                    <option>Adamawa</option>
                    <option>Akwa Ibom</option>
                    <option>Anambra</option>
                    <option>Bauchi</option>
                    <option>Bayelsa</option>
                    <option>Benue</option>
                    <option>Borno</option>
                    <option>Cross River</option>
                    <option>Delta</option>
                    <option>Ebonyi</option>
                    <option>Edo</option>
                    <option>Ekiti</option>
                    <option>Enugu</option>
                    <option>Gombe</option>
                    <option>Imo</option>
                    <option>Jigawa</option>
                    <option>Kaduna</option>
                    <option>Kano</option>
                    <option>Katsina</option>
                    <option>Kebbi</option>
                    <option>Kogi</option>
                    <option>Kwara</option>
                    <option>Lagos</option>
                    <option>Nasarawa</option>
                    <option>Niger</option>
                    <option>Ogun</option>
                    <option>Ondo</option>
                    <option>Osun</option>
                    <option>Oyo</option>
                    <option>Plateau</option>
                    <option>Rivers</option>
                    <option>Sokoto</option>
                    <option>Taraba</option>
                    <option>Yobe</option>
                    <option>Zamfara</option>

                </select>
                <span id="stateError" class="text-danger error-messages"></span>
                </div>
                
            </div>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="saveBtn" type="button" class="btn btn-primary">Proceed</button>
                    </div>
            </form>
                </div>
               
                </div>
            </div>
            </div>
       

            <!-- Modal En -->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#TaxpayerModal" >
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add Taxpayer
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
            <table id="taxpayers-table" id="kt_datatable_responsive" class="table table-striped border rounded gy-5 gs-7">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Taxpayer Type</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($taxpayers as $taxpayer)
                <tr>

                <!-- <td>
                    <a href="{{ route('taxpayers.show', ['id' => $taxpayer->id]) }}">
                        <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', $taxpayer->name) }}">
                            {{ substr($taxpayer->name, 0, 1) }}
                        </div>
                    </a>
                </td> -->

                    <td><a href="{{ route('taxpayers.show', ['id' => $taxpayer->id]) }}">
                            {{ $taxpayer->name }}
                        </a></td>
                    <td>{{ $taxpayer->phone_number }}</td>
                    <td>{{ $taxpayer->taxpayer_type }}</td>
                    <td>{{ $taxpayer->email }}</td>
                    <td>{{ $taxpayer->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


   <script>
    $(document).ready(function() {
        var table = $('#taxpayers-table').DataTable();

        $('#search').on('keyup', function () {
            table.search($(this).val()).draw();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var form = $('#taxpayerForm')[0];

        $('#saveBtn').click(function (e) {
            e.preventDefault();

            $('.error-messages').html('');
            var formData = new FormData(form);

            $.ajax({                
                url: '{{route("taxpayer.store") }}',
                method: 'POST',
                processData: false,
                contentType: false,
                data: formData,

                success: function(response){
                    $('#TaxpayerModal').modal('hide');
                    if(response){
                        toastr.success(response.success);
                        $('#saveBtn').hide();
                        Swal.fire({
                            text: "You have successfully Created Taxpayer ",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        // Reload the DataTable
                        table.ajax.reload();
                    }
                },
                error: function(error){
                    if(error){
                        toastr.error(error.message);
                        console.log(error.responseJSON.errors.name)
                        $('#nameError').html(error.responseJSON.errors.name);
                        $('#phoneError').html(error.responseJSON.errors.phone_number);
                        $('#lgaError').html(error.responseJSON.errors.lga);
                        $('#wardError').html(error.responseJSON.errors.ward);
                        $('#TaxtypeError').html(error.responseJSON.errors.taxpayer_type);
                        $('#addressError').html(error.responseJSON.errors.address);
                        $('#emailError').html(error.responseJSON.errors.email);
                    }
                }
            })
        });

        // Initialize DataTable only once
        $('#taxpayers-table').DataTable();
    });
</script>


</x-default-layout>


