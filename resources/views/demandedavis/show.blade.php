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


                <div class="row g-5 g-xl-10 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 16-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-100 mb-5 mb-xl-10"
                            style="background-color: #080655;background-image:url('assets/media/svg/shapes/wave-bg-dark.svg')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->

                                    <span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">{{ $dAvis->count() }}</span>
                                    {{-- <span
                                        class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">{{ $dAvis->where('status', '0')->count() }}</span> --}}
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-50 pt-1 fw-bold fs-6">Active demend</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div
                                        class="d-flex justify-content-between fw-bolder fs-6 text-white opacity-50 w-100 mt-auto mb-2">
                                        <span> {{ $dAvis->where('status', '0')->count() }}
                                            Pending</span>
                                        <span>100</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                                        <div class="bg-danger rounded h-8px" role="progressbar"
                                            style="width: {{ ($dAvis->where('status', '0')->count() / 100) * 100 }}%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 4-->
                        <div class="card card-flush h-md-100 mb-5 mb-xl-10">
                            <!--begin::Header-->

                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                <!--begin::Chart-->
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center w-100">
                                    <!--begin::Label-->

                                    <!--begin::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fw-bold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4"> <span
                                                class="badge badge-light-warning "
                                                style="color: #50cd89;
                                                background-color: #e8fff3;
                                                width: 121px !important;
                                                font-weight: bold;
                                                font-size: small;">approved</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-boldest text-gray-700 text-xxl-end">
                                            {{ $dAvis->where('status', '1')->count() }}
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <div class="d-flex fw-bold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4"> <span
                                                class="badge badge-light-warning "
                                                style="color: rgb(175, 175, 68);
                                                background-color: rgba(255, 255, 0, 0.26);
                                                width: 121px !important;
                                                font-weight: bold;
                                                font-size: small;">Progress</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-boldest text-gray-700 text-xxl-end">
                                            {{ $dAvis->where('status', '0')->count() }}
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fw-bold align-items-center  my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: red">
                                        </div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4"> <span
                                                class="badge badge-light-danger "
                                                style="color: red;
                                                background-color: rgba(255, 0, 0, 0.13);
                                                width: 121px !important;
                                                font-weight: bold;
                                                font-size: small;">Rejected</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="fw-boldest text-gray-700 text-xxl-end">
                                            {{ $dAvis->where('status', '2')->count() }}

                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 4-->
                    </div>
                    <!--begin::Card-->
                    <div class="card">
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Header-->

                            <div class="card-header border-0 pt-5">
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Accordion-->
                                <!--begin::Table-->
                                <table id="kt_datatable_example_5"
                                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="w-25px">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                                </div>
                                            </th>
                                            <th class="min-w-150px">Generaliste</th>
                                            <th class="min-w-150px">Motif</th>
                                            <th class="min-w-150px">Status</th>
                                            <th class="min-w-150px">Date ajouter</th>
                                            <th class="min-w-140px ">Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @if (isset($dAvis))
                                            @foreach ($dAvis as $dAviss)
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                                value="1" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    @if ($dAviss->userID_action == auth()->user()->id)
                                                                        {{ $dAviss->name_medcine_1 }}
                                                                    @else
                                                                        {{ $dAviss->name_medcine_2 }}
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                            {{ $dAviss->title ? $dAviss->title : ' aucun Description ' }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                            @if ($dAviss->status == 0)
                                                                <span
                                                                    class="badge badge-light-warning fw-bolder me-auto px-4 py-3">In
                                                                    Progress</span>
                                                        </a>
                                                    @elseif($dAviss->status == 1)
                                                        <span
                                                            class="badge badge-light-success fw-bolder me-auto px-4 py-3 ">In
                                                            Progress</span>
                                                        </a>
                                                    @elseif($dAviss->status == 2)
                                                        <span
                                                            class="badge badge-light-danger fw-bolder me-auto px-4 py-3">In
                                                            Progress</span>
                                                        </a>
                                            @endif

                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                                    {{ $dAviss->date_start ? $dAviss->date_start : ' aucun Description ' }}
                                                </a>
                                            </td>

                                            <td>
                                                <div class="d-flex justify-content flex-shrink-0">
                                                    {{-- <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#update{{ $dAviss->id }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="black" />
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="black" />
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                    </a> --}}
                                                    @if ($dAviss->userID_action == auth()->user()->id)
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#update{{ $dAviss->id }}"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    @endif
                                                    <a href="{{ URL::route('affiche', $dAviss->id) }}"
                                                        class="btn btn-sm btn-primary py-2 px-3">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="currentColor">
                                                                </rect>
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->

                            </div>


                        </div>
                    </div>
                    <!--end::Card-->
                </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('scripts')
    @toastr_js
    @toastr_render
@endsection
