<div
    class="aside-menu-wrapper flex-column-fluid"
    id="kt_aside_menu_wrapper"
>
    <!--begin::Menu Container-->
    <div
        id="kt_aside_menu"
        class="aside-menu my-4"
        data-menu-vertical="1"
        data-menu-scroll="1"
        data-menu-dropdown-timeout="500"
    >
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li
                class="menu-item {{ request()->is('admin') ? 'menu-item-active' : '' }}"
                aria-haspopup="true"
            >
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="menu-link"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"
                                />
                                <path
                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-section">
                <h4 class="menu-text">Orders</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li
                class="menu-item {{ request()->is('admin/trip_order*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="#"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Trip Orders</span>
                </a>
            </li>
            <li
                class="menu-item {{ request()->is('admin/boat/order*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.boat.order.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Boat Orders</span>
                </a>
            </li>
            <li class="menu-section">
                <h4 class="menu-text">Data Portfolio</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li
                class="menu-item {{ request()->is('admin/portfolio') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.portfolio.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Portfolio</span>
                </a>
            </li>
            <li
                class="menu-item {{ request()->is('admin/portfolio_feature*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.portfolio_feature.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Portfolio Feature</span>
                </a>
            </li>

            <li class="menu-section">
                <h4 class="menu-text">Data Trip</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li
                class="menu-item {{ request()->is('admin/trip*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.trip.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Trip</span>
                </a>
            </li>
            <li class="menu-section">
                <h4 class="menu-text">Data Boat</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li
                class="menu-item {{ request()->is('admin/boat') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.boat.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Boat</span>
                </a>
            </li>
            <li
                class="menu-item {{ request()->is('admin/boat/service*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.boat.service.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Boat Service</span>
                </a>
            </li>
            <li class="menu-section">
                <h4 class="menu-text">Data Blog</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li
                class="menu-item {{ request()->is('admin/blog*') ? 'menu-item-active menu-item-open' : '' }}"
                aria-haspopup="true"
                data-menu-toggle="hover"
            >
                <a
                    href="{{ route('admin.blog.index') }}"
                    class="menu-link menu-toggle"
                >
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <rect
                                    x="0"
                                    y="0"
                                    width="24"
                                    height="24"
                                />
                                <path
                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                    fill="#000000"
                                    opacity="0.3"
                                />
                                <path
                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                    fill="#000000"
                                />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Blog</span>
                </a>
            </li>

        </ul>

        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
