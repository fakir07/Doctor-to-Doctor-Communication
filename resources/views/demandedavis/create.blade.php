@extends('layouts.master')
@section('title')
    Specialties
@endsection


@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Create</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Invoice Manager</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Create Invoice</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_624476097896b">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            data-kt-select2="true" data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_624476097896b" data-allow-clear="true"
                                            data-select2-id="select2-data-7-yq4b" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-ypms"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-04is" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-9g7q-container"
                                                    aria-controls="select2-9g7q-container"><span
                                                        class="select2-selection__rendered" id="select2-9g7q-container"
                                                        role="textbox" aria-readonly="true" title="Select option"><span
                                                            class="select2-selection__placeholder">Select
                                                            option</span></span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="{{ route('demandeDavis.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div class="fw-bolder fs-3 text-gray-800 mb-8">
                                            <img alt="Logo" src="{{ asset('assets/media/logos/logo_invoice.png ') }}"
                                                class="h-50px  rounded logo">
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bolder fs-6 text-gray-800">{{ date('Y-m-d') }}
                                                </div>
                                                <!--end::Col-->
                                                <input type="hidden" value="{{ date('Y-m-d') }}" name="date_start">
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7  mb-1" style="color: red">Due Date:</div>
                                                <!--end::Label-->
                                                <!--end::Info-->
                                                <div
                                                    class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                    <input type="date" name="date_end" class="form-control mb-2"
                                                        value="{{ now()->toDateString() }}" />
                                                    <span class="fs-7 text-danger d-flex align-items-center">
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bolder fs-6 text-gray-800"> {{ $medcine_send->name }}
                                                    {{ $medcine_send->prenom }}
                                                    {{ $medcine_send->spécialité->specialty_name }}
                                                </div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-bold fs-7 text-gray-600"> {{ $medcine_send->email }}
                                                    <br> {{ $medcine_send->ville }} {{ $medcine_send->adresse }}
                                                </div>
                                                <input type="hidden" name="medcine_1" id="medcine_1"
                                                    value="{{ $medcine_send->id }}">
                                                <input type="hidden" name="name_medcine_1" id="name_medcine_1"
                                                    value="{{ $medcine_send->name }}">
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-bold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bolder fs-6 text-gray-800"> {{ $medcine_to->name }}
                                                    {{ $medcine_to->prenom }}
                                                    {{ $medcine_to->spécialité->specialty_name }}
                                                </div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-bold fs-7 text-gray-600"> {{ $medcine_to->email }}
                                                    <br> {{ $medcine_to->ville }} {{ $medcine_to->adresse }}
                                                </div>
                                                <input type="hidden" name="medcine_2" id="medcine_2"
                                                    value="{{ $medcine_to->id }}">
                                                <input type="hidden" name="userID_action" id="userID_action"
                                                    value="{{ $medcine_to->user_id }}">
                                                <input type="hidden" name="name_medcine_2" id="name_medcine_2"
                                                    value="{{ $medcine_to->name }}">


                                            </div>
                                            <!--end::Col-->
                                        </div>

                                    </div>

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">

                                            <!--begin::Col-->
                                            <div class="col-lg-12">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Title</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name='title'
                                                        class="form-control form-control-solid" placeholder="Name">
                                                </div>
                                                <label
                                                    class="form-label fs-6 fw-bolder text-gray-700 mb-3">Description</label>
                                                <div class="mb-5">
                                                    <textarea name="description" class="form-control form-control-solid" rows="3"
                                                        placeholder="What is this invoice for?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--end::Item template-->
                                        <!--begin::Notes-->
                                        <div class="mb-0 mb-5 ">
                                            <label class="form-label fs-6 fw-bolder text-gray-700">Questions 1</label>
                                            <textarea name="question_1" class="form-control form-control-solid" rows="3"
                                                placeholder="Thanks for your business"></textarea>
                                        </div>
                                        <!--end::Notes-->
                                        <!--begin::Notes-->
                                        <div class="mb-0 mb-5 ">
                                            <label class="form-label fs-6 fw-bolder text-gray-700">Questions 2</label>
                                            <textarea name="question_2" class="form-control form-control-solid" rows="3"
                                                placeholder="Thanks for your business"></textarea>
                                        </div>
                                        <!--end::Notes-->
                                        <!--begin::Notes-->
                                        <div class="mb-0 mb-5 ">
                                            <label class="form-label fs-6 fw-bolder text-gray-700">Questions 3</label>
                                            <textarea name="question_3" class="form-control form-control-solid" rows="3"
                                                placeholder="Thanks for your business"></textarea>
                                        </div>
                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Form-->
                                    <div class="form my-6" action="#" method="post">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <input type="file" name="files[]"
                                                            accept="image/*,application/pdf" multiple="">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10
                                                            files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Form-->

                                    <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-lg-auto min-w-lg-300px">
                        <!--begin::Card-->
                        <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                            data-kt-sticky-offset="{default: false, lg: '200px'}"
                            data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                            data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95"
                            style="">
                            <!--begin::Card body-->
                            <div class="card-body p-10">
                                <!--begin::Input group-->
                                <div class="">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder fs-6 text-gray-700 "> Paiement <span>
                                            (MAD)</span></label>
                                    <input class="form-control mb-6" id="input1">
                                    <div class="fw-bolder fs-4">Total prix: <input type="text"
                                            style="border: none;
                                    width: 65px;
                                    margin-left: 17px;
                                    color: green;
                                    font-weight: 900;
                                    background:white;
                                    "
                                            id="input2" readonly disabled> MAD</div>
                                </div>
                                {{-- <div class="separator separator-dashed  "></div> --}}
                                <!--begin::Col-->
                                <div class="col-lg-12 my-8">

                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Note Medcine</label>
                                    <div class="mb-5">
                                        <textarea name="notes" class="form-control form-control-solid" rows="" placeholder="Note Medcine"></textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <button type="submit" href="#" class="btn btn-primary w-100"
                                        id="kt_invoice_submit_button">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.3"
                                                    d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Send</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                    </form>

                </div>
                <!--end::Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('scripts')
    {{-- <script>
        function displayValue(value) {
            cons
            document.getElementById('input2').value = value;
        }
    </script> --}}

    <script>
        $(document).ready(function() {
            $("#input1").on('input', function() {
                var textareaValue = $(this).val();
                $("#input2").val(textareaValue);
            });
        });
    </script>
    @toastr_js
    @toastr_render
@endsection
