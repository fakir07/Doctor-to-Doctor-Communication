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
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Liste medcin</h1>
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
                    <li class="breadcrumb-item text-muted">Pages</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">User Profile</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Followers</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div>
                    <button type="button" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder  " data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_621214a8b8f66">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <form action="{{ route('demandeDavis.index') }}" method="get">
                            @csrf
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Parent:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                        <select name="id_specialties"  class="form-select form-select-sm " >
                        <option value="choisir a spécialité" selected="selected" disabled >choisir a spécialité</option>
                        <option value="all" >all</option>
                    @foreach ($specialties as $specialtie )
                        <option value="{{$specialtie->id}}">{{$specialtie->specialty_name}}</option>
                    @endforeach
                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-sm btn-light btn-active-light-primary me-2">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>




            </div>

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
            <!--begin::Navbar-->

            <!--end::Navbar-->
{{--
            <div class="d-flex justify-content-between">


                <div > <h3 class="fw-bolder my-2">My Connections
                    <span class="fs-6 text-gray-400 fw-bold ms-1">{{$medcines->count()}}</span></h3>
                  </div>
                <div>
                        <button type="button" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder  " data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_621214a8b8f66">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <form action="" method="get">
                                @csrf
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Parent:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                            <select name="status"  class="form-select form-select-sm " >
                            <option value="choisir a spécialité" selected="selected" disabled >choisir a spécialité</option>
                        @foreach ($specialties as $specialtie )
                            <option value="{{$specialtie->id}}">{{$specialtie->specialty_name}}</option>
                        @endforeach
                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-sm btn-light btn-active-light-primary me-2">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                </div>
                </div>
              </div>
              </div>
            <!--begin::Row-->
          --}}
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                @foreach ($medcines as $medcine )
                <div class="col-md-4 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column p-9 border border-secondary">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{ asset($medcine->profile_img) }}" alt="{{$medcine->name}}" >
                                <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3"></div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{$medcine->name}}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fw-bold text-gray-400 mb-6">{{$medcine->spécialité->specialty_name }}</div>
                            <!--end::Position-->
                            <!--begin::Info-->

                            <!--end::Info-->
                            <!--begin::Follow-->
                            <a href="{{ URL::route('craetedavis' ,['medcine_1' =>Auth::user()->id,'medcine_2' => $medcine->id]) }}" class="btn btn-sm btn-primary border border-secondary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
                                    <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Create d'avis</a>
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                @endforeach


            </div>
            <!--end::Row-->

            {{-- <div class="d-flex flex-center">
                <button class="btn btn-primary" id="kt_followers_show_more_button">
                    <!--begin::Indicator-->
                    <span class="indicator-label">Show more</span>
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator-->
                </button>
            </div> --}}
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
