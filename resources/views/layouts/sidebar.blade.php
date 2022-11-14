<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
{{--    <!-- Brand Logo -->--}}
{{--    <a href="" class="brand-link">--}}
{{--        <img src="vendors/dist/img/shopping_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light" style="color:goldenrod">MY SHOPPING</span>--}}
{{--    </a>--}}

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/income-expense.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block" style="color:goldenrod">Income Expense</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" style="background-color:goldenrod">
                        <i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;&nbsp;
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>

                @if(Auth::check() && Auth::user()->role == "Admin")

                <li class="nav-header" style="color:goldenrod">User</li>

                <li class="nav-item menu-open">
                    <a href="{{route('user')}}" class="nav-link {{ (request()->is('user')) ? 'active' : '' }}">
                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <p>
                           USER
                        </p>
                    </a>
                </li>

                <li class="nav-header" style="color:goldenrod">Category</li>

                <li class="nav-item menu-open">
                    <a href="{{route('category')}}" class="nav-link {{ (request()->is('category')) ? 'active' : '' }}">
                        &nbsp;<i class="fa fa-list-alt"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                        CATEGORY
                        </p>
                    </a>
                </li>
                @endif

                <li class="nav-header" style="color:goldenrod">Amount</li>

                <li class="nav-item menu-open">
                    <a href="{{route('amount')}}" class="nav-link {{ (request()->is('amount')) ? 'active' : '' }}">
                        &nbsp;<i class="fas fa-money-check"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                            AMOUNT
                        </p>
                    </a>
                </li>

                <li class="nav-header" style="color:goldenrod">Incomes</li>

                <li class="nav-item menu-open">
                    <a href="{{route('incomes')}}" class="nav-link {{ (request()->is('incomes')) ? 'active' : '' }}">
                        &nbsp;<i class="fas fa-money-check"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                            INCOMES
                        </p>
                    </a>
                </li>

                <li class="nav-header" style="color:goldenrod">Expenses</li>

                <li class="nav-item menu-open">
                    <a href="{{route('expenses')}}" class="nav-link {{ (request()->is('expenses')) ? 'active' : '' }}">
                        &nbsp;<i class="fas fa-money-check"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                            EXPENSES
                        </p>
                    </a>
                </li>

                <li class="nav-header" style="color:goldenrod">Transfer</li>

                <li class="nav-item menu-open">
                    <a href="{{route('transfer')}}" class="nav-link {{ (request()->is('transfer')) ? 'active' : '' }}">
                        &nbsp;<i class="fa fa-exchange-alt"></i>&nbsp;&nbsp;
                        <p>
                            TRANSFER
                        </p>
                    </a>
                </li>

                <li class="nav-header" style="color:goldenrod">Report</li>

                <li class="nav-item menu-open">
                    <a href="{{route('report')}}" class="nav-link {{ (request()->is('report')) ? 'active' : '' }}">
                        &nbsp;<i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;
                        <p>
                            REPORT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
