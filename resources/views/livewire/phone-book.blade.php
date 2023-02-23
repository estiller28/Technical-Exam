
<div>
    {{--    upload contact modal--}}
    {{--    <div wire:ignore.self class="modal fade" id="uploadContactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <form wire:submit.prevent="importContact" enctype="multipart/form-data"--}}
    {{--                      class="needs-validation" novalidate >--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h5 class="modal-title" id="staticBackdropLabel">Download Contact Import File</h5>--}}
    {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        <p>--}}
    {{--                            <span style="font-size: 16px;" class="text-danger font-weight-bold">Note: </span>  (Please make sure not to modify the headers of the template)--}}
    {{--                        </p>--}}
    {{--                        <p>--}}
    {{--                            <button type="button"  wire:click="exportTemplate" class="btn btn-primary" href="">Download Template</button>--}}
    {{--                        </p>--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <input wire:model="template" type="file" class="form-control   @error('template') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('template')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>--}}
    {{--                        <button type="submit" class="btn btn-primary">Upload</button>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    {{--    --}}{{--    edit modal--}}
    {{--    <div wire:ignore.self class="modal fade" id="updateContactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                <form wire:submit.prevent="update" enctype="multipart/form-data"--}}
    {{--                      class="needs-validation" novalidate >--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <h5 class="modal-title" id="staticBackdropLabel">Edit Contact</h5>--}}
    {{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <label for="title">Title:</label>--}}
    {{--                            <input wire:model="title" type="text" class="form-control   @error('title') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('title')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <label for="first_name">First Name:</label>--}}
    {{--                            <input wire:model="first_name" type="text" class="form-control   @error('first_name') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('first_name')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <label for="last_name">Last Name:</label>--}}
    {{--                            <input wire:model="last_name" type="text" class="form-control   @error('last_name') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('last_name')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <label for="mobile_number">Mobile Number:</label>--}}
    {{--                            <input wire:model="mobile_number" type="number" class="form-control   @error('mobile_number') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('mobile_number')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group mt-3 mb-3">--}}
    {{--                            <label for="company_name">Company Name:</label>--}}
    {{--                            <input wire:model="company_name" type="text" class="form-control   @error('company_name') is-invalid @enderror" id="validationServer" required aria-describedby="validationServerFeedback">--}}
    {{--                            @error('company_name')--}}
    {{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-footer">--}}
    {{--                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>--}}
    {{--                        <button type="submit" class="btn btn-primary">Save Changes</button>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="container mt-5">--}}
    {{--        <div class="card">--}}
    {{--            <div class="card-header">--}}
    {{--                <div class="card-label">--}}
    {{--                    <div class="card-title">--}}
    {{--                        Phone Book--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card-body">--}}
    {{--                <div class="row d-flex mb-3 ">--}}
    {{--                    <div class="col-md-2 mb-3">--}}
    {{--                        <input id="customSearch" type="search" class="form-control mr-2" placeholder="Search">--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-2">--}}
    {{--                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadContactModal">--}}
    {{--                            Upload New Contact--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <table id="phone_books" class="table  table-hover" style="width:100%">--}}
    {{--                    <thead>--}}
    {{--                    <tr>--}}
    {{--                        <th>Title</th>--}}
    {{--                        <th>First Name</th>--}}
    {{--                        <th>Last Name</th>--}}
    {{--                        <th>Mobile Number</th>--}}
    {{--                        <th>Company Name</th>--}}
    {{--                        <th>Action</th>--}}
    {{--                    </tr>--}}
    {{--                    </thead>--}}
    {{--                    @foreach($contacts as $contact)--}}
    {{--                        <tbody class="table-striped">--}}
    {{--                        <tr>--}}
    {{--                            <td>{{ $contact->title}}</td>--}}
    {{--                            <td>{{ $contact->first_name}}</td>--}}
    {{--                            <td>{{ $contact->last_name}}</td>--}}
    {{--                            <td>{{ $contact->mobile_number}}</td>--}}
    {{--                            <td>{{ $contact->company_name}}</td>--}}
    {{--                            <td>--}}
    {{--                                <span>--}}
    {{--                                     <button--}}
    {{--                                         wire:click="edit({{ $contact->id }})"--}}
    {{--                                         type="button"--}}
    {{--                                         class="btn btn-primary"--}}
    {{--                                         data-bs-toggle="modal"--}}
    {{--                                         data-bs-target="#updateContactModal">--}}
    {{--                                       Edit--}}
    {{--                                     </button>--}}

    {{--                                </span>--}}
    {{--                                <span>--}}
    {{--                                    <button--}}
    {{--                                        wire:click="destroy({{ $contact->id }})"--}}
    {{--                                        type="button"--}}
    {{--                                        class="btn btn-danger">--}}
    {{--                                        Delete--}}
    {{--                                     </button>--}}
    {{--                                </span>--}}
    {{--                            </td>--}}
    {{--                        </tr>--}}
    {{--                        </tbody>--}}
    {{--                    @endforeach--}}
    {{--                </table>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="card-label">
                                Import Contact
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="uploadContact">
                            <input type="file" wire:model="template">
                            <button type="submit">Upload</button>
                        </form>
                        @if($rows)
                            <div class="mt-5 mb-5">
                                <h3>Data</h3>
                            </div>
                            <div class="mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Column Headers</th>
                                        <th>New Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rows[0] as $key => $column)
                                        <tr>
                                            <td>{{ $column }}</td>
                                            <td>
                                                <select wire:model="newColumnValues. {{ $key }}">
                                                    @foreach($tempColumnValues[0] as $index => $value)
                                                        <option hidden value="">New Value</option>
                                                        <option value="{{ $value }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button wire:click="saveDataFromFileToDB">Import Data</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
