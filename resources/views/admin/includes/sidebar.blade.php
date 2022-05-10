<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ route('admin.dashboard') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئسيه </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-bank"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المعاير الرئيسيه</span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\Main_criteria::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.criteria') }}"
                                          data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.criteria') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-life-bouy"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الانشطه</span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\Activitie::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.activities') }}"
                                        data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.activity') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-connectdevelop"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الادوار</span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\Role::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.rules') }}"
                                        data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.rule') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-industry"></i>
                <span class="menu-title" data-i18n="nav.dash.main">المهام</span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\Mission::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.missions') }}"
                                        data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.mission') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-folder-open"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الجهات ذات العلاقه</span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\Data::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.data') }}"
                                        data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.data') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">المستخدمين</span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">{{ App\Models\User::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.users') }}"
                                        data-i18n="nav.dash.ecommerce">عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.create.user') }}" data-i18n="nav.dash.crypto">اضافه جديده</a>
                    </li>
                </ul>
            </li>





        </ul>
    </div>
</div>
