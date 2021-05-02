<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ Auth::user()->avatar }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->role_name }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('profile.show', Auth::user()->username) }}">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                @if (Auth::user()->is_farmer())
                    {{-- Farmer Sidebar Options --}}
                    <li class="nav-item">
                        <a href="../index.html">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#fundraisers">
                            <i class="far fa-newspaper"></i>
                            <p>Fundraisers</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="fundraisers">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('fundraiser.create') }}">
                                        <span class="sub-item">Create Fundraiser</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('fundraiser.index') }}">
                                        <span class="sub-item">My Fundraisers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#expense-requests">
                            <i class="fas fa-money-check-alt"></i>
                            <p>Expense Requests</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="expense-requests">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('expense.create') }}">
                                        <span class="sub-item">Create Expense Request</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('expense.index') }}">
                                        <span class="sub-item">My Expense Requests</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->is_investor())
                    {{-- Investor Sidebar Options --}}
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('fundraiser.index') }}">
                            <i class="far fa-newspaper"></i>
                            <p>New Fundraisers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('investorportfolio') }}">
                            <i class="fas fa-book"></i>
                            <p>My Portfolio</p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->is_admin())
                    {{-- Admin Sidebar Options --}}
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('expense.index') }}">
                            <i class="fas fa-money-check-alt"></i>
                            <p>Expense Requests</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('crops.index') }}">
                            <i class="fas fa-th-list"></i>
                            <p>Manage Crop Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('croptypes.index') }}">
                            <i class="fas fa-cannabis"></i>
                            <p>Manage Crops</p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->is_job_volunteer())
                    {{-- Job Volunteer Sidebar Options --}}
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#expense-requests">
                            <i class="fas fa-money-check-alt"></i>
                            <p>Expense Requests</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="expense-requests">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('expense.create') }}">
                                        <span class="sub-item">Create Expense Request</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('expense.index') }}">
                                        <span class="sub-item">My Expense Requests</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
