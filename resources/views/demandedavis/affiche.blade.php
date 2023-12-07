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
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">My Projects</h1>
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
                        <li class="breadcrumb-item text-muted">Projects</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">My Projects</li>
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
                            id="kt_menu_624475c555b7c">
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
                                            data-dropdown-parent="#kt_menu_624475c555b7c" data-allow-clear="true"
                                            data-select2-id="select2-data-7-8a4m" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-qyw3"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-ma9j" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-abqd-container"
                                                    aria-controls="select2-abqd-container"><span
                                                        class="select2-selection__rendered" id="select2-abqd-container"
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
                <!--begin::Stats-->
                <div class="row g-6 g-xl-9">
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <h1 class="text-dark mb-5">les Questions</h1>
                                <h6 class="text-primary fw-bolder mb-5">Motif : <span
                                        class="text-dark mx-3">{{ $dDavis->title }}</span></h6>
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1  svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z"
                                                fill="currentColor"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center ">
                                            <!--begin::Title-->
                                            <a
                                                class="text-dark text-hover-primary fs-4 me-3 fw-bold">{{ $dDavis->question_1 }}</a>
                                        </div>

                                    </div>
                                    <!--end::Section-->

                                </div>
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1  svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z"
                                                fill="currentColor"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center ">
                                            <!--begin::Title-->
                                            <a
                                                class="text-dark text-hover-primary fs-4 me-3 fw-bold">{{ $dDavis->question_2 }}</a>
                                        </div>

                                    </div>
                                    <!--end::Section-->

                                </div>
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1  svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z"
                                                fill="currentColor"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center ">
                                            <!--begin::Title-->
                                            <a
                                                class="text-dark text-hover-primary fs-4 me-3 fw-bold">{{ $dDavis->question_3 }}</a>
                                        </div>
                                    </div>
                                    <!--end::Section-->

                                </div>
                                <a href="{{ URL::route('telecharge_pdf_davis', $dDavis) }}" class="btn btn-primary"
                                    id="kt_subscriptions_create_button">
                                    <!--begin::Indicator-->
                                    <span class="indicator-label">Telecharger Pdf</span>
                                    <!--end::Indicator-->
                                </a>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Budget-->
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex flex-stack my-4">
                                    <!--begin::Folder path-->
                                    <div class="badge badge-lg badge-light-primary">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs039.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path opacity="0.3"
                                                        d="M14.1 15.013C14.6 16.313 14.5 17.813 13.7 19.113C12.3 21.513 9.29999 22.313 6.89999 20.913C5.29999 20.013 4.39999 18.313 4.39999 16.613C5.09999 17.013 5.99999 17.313 6.89999 17.313C8.39999 17.313 9.69998 16.613 10.7 15.613C11.1 15.713 11.5 15.813 11.9 15.813C12.7 15.813 13.5 15.513 14.1 15.013ZM8.5 12.913C8.5 12.713 8.39999 12.513 8.39999 12.313C8.39999 11.213 8.89998 10.213 9.69998 9.613C9.19998 8.313 9.30001 6.813 10.1 5.513C10.6 4.713 11.2 4.11299 11.9 3.71299C10.4 2.81299 8.49999 2.71299 6.89999 3.71299C4.49999 5.11299 3.70001 8.113 5.10001 10.513C5.80001 11.813 7.1 12.613 8.5 12.913ZM16.9 7.313C15.4 7.313 14.1 8.013 13.1 9.013C14.3 9.413 15.1 10.513 15.3 11.713C16.7 12.013 17.9 12.813 18.7 14.113C19.2 14.913 19.3 15.713 19.3 16.613C20.8 15.713 21.8 14.113 21.8 12.313C21.9 9.513 19.7 7.313 16.9 7.313Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.69998 9.61307C9.19998 8.31307 9.30001 6.81306 10.1 5.51306C11.5 3.11306 14.5 2.31306 16.9 3.71306C18.5 4.61306 19.4 6.31306 19.4 8.01306C18.7 7.61306 17.8 7.31306 16.9 7.31306C15.4 7.31306 14.1 8.01306 13.1 9.01306C12.7 8.91306 12.3 8.81306 11.9 8.81306C11.1 8.81306 10.3 9.11307 9.69998 9.61307ZM8.5 12.9131C7.1 12.6131 5.90001 11.8131 5.10001 10.5131C4.60001 9.71306 4.5 8.91306 4.5 8.01306C3 8.91306 2 10.5131 2 12.3131C2 15.1131 4.2 17.3131 7 17.3131C8.5 17.3131 9.79999 16.6131 10.8 15.6131C9.49999 15.1131 8.7 14.1131 8.5 12.9131ZM18.7 14.1131C17.9 12.8131 16.7 12.0131 15.3 11.7131C15.3 11.9131 15.4 12.1131 15.4 12.3131C15.4 13.4131 14.9 14.4131 14.1 15.0131C14.6 16.3131 14.5 17.8131 13.7 19.1131C13.2 19.9131 12.6 20.5131 11.9 20.9131C13.4 21.8131 15.3 21.9131 16.9 20.9131C19.3 19.6131 20.1 16.5131 18.7 14.1131Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#">Demend</a>
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary mx-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#">Images <span> {{ $imagedavis->count() }}</span></a>
                                        </div>
                                    </div>
                                    {{-- <!--end::Folder path-->


                                    <!--end::Folder Stats--> --}}
                                </div>
                                @foreach ($imagedavis as $imagedavi)
                                    {{-- <div class="image-input image-input-empty image-input-outline mb-3 mx-3 my-5"
                                        data-kt-image-input="true"
                                        style="background-image: url({{ asset($imagedavi->imagePath) }})">
                                    </div> --}}
                                    <div class="image-input image-input-empty image-input-outline mb-3 mx-3"
                                        data-kt-image-input="true"
                                        style="background-image:  url({{ asset($imagedavi->imagePath) }})">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-120px h-120px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        {{-- <a href="{{ URL::route('telecharge_picesjoint') }}/{{ $dDavis->id }}/{{ $imagedavi->imagePath }}"> --}}
                                        <a
                                            href="{{ route('telecharge_picesjoint', ['id' => $dDavis->id, 'imagePath' => $imagedavi->imagePath]) }}">


                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="" data-bs-original-title="telecharger">
                                                <i class="bi bi-save-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                            </label>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!--end::Budget-->
                    </div>

                </div>
                <div class="row g-6 g-xl-9 my-6">
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Card-->
                        <div class="card h-100">
                            <div class="text-center px-4">
                                <img class="mw-100 mh-300px" alt=""
                                    src="{{ asset('assets/media/illustrations/unitedpalms-1/4.png') }}">
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>

                    @if ($dDavis->userID_action == auth()->user()->id)
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card h-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bolder">Note</h2>
                                    </div>
                                    <!--begin::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Custom fields-->

                                    <!--end::Custom fields-->
                                    <!--begin::Invoice footer-->
                                    <div class="d-flex flex-column mb-10 fv-row">
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bolder form-label mb-3 my-3">Commentaire Medcine
                                            <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7"
                                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                data-bs-html="true" data-bs-content="Add an addition invoice footer note."
                                                data-bs-original-title="" title=""></i>
                                        </div>
                                        <!--end::Label-->
                                        <textarea class="form-control form-control-solid rounded-3" rows="4"></textarea>
                                        <div class="mb-0 my-6">
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
                                                Send</button>
                                        </div>
                                    </div>
                                    <!--end::Invoice footer-->
                                    <!--begin::Option-->

                                    <!--end::Option-->
                                    <!--begin::Option-->

                                    <!--end::Option-->
                                </div>
                                <!--end::Card body-->
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-xxl-4">
                            <div class="card h-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bolder">Note</h2>
                                    </div>
                                    <!--begin::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Custom fields-->

                                    <!--end::Custom fields-->
                                    <!--begin::Invoice footer-->
                                    <div class="d-flex flex-column mb-10 fv-row">
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bolder form-label mb-3 my-3">Commentaire Medcine
                                            <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7"
                                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                data-bs-html="true" data-bs-content="Add an addition invoice footer note."
                                                data-bs-original-title="" title=""></i>
                                        </div>
                                        <!--end::Label-->
                                        <textarea class="form-control form-control-solid rounded-3" rows="4" readonly></textarea>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif


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
