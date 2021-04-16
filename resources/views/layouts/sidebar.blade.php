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
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
                        @if (Auth::user()->is_farmer())
                            {{-- Farmer Sidebar Options --}}
                            <li class="nav-item">
                                <a href="{{ route('fundraiser.create') }}">
                                    <i class="flaticon-home"></i>
                                    <p>Create Fundraiser</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('fundraiser.index') }}">
                                    <i class="flaticon-home"></i>
                                    <p>My Fundraisers</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.create') }}">
                                    <i class="flaticon-home"></i>
                                    <p>Create Expense Request</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.index') }}">
                                    <i class="flaticon-home"></i>
                                    <p>My Expense Requests</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->is_investor())
                            {{-- Investor Sidebar Options --}}
                            <li class="nav-item">
                                <a href="">
                                    <i class="flaticon-home"></i>
                                    <p>New Fundraisers</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->is_admin())
                            {{-- Admin Sidebar Options --}}
                            <li class="nav-item">
                                <a href="">
                                    <i class="flaticon-home"></i>
                                    <p>Pending Expense Requests</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="">
                                    <i class="flaticon-home"></i>
                                    <p>All Expense Requests</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('crops.index') }}">
                                    <i class="flaticon-home"></i>
                                    <p>Manage Crop Categories</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('croptypes.index') }}">
                                    <i class="flaticon-home"></i>
                                    <p>Manage Crops</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->is_job_volunteer())
                            {{-- Job Volunteer Sidebar Options --}}
                            <li class="nav-item">
                                <a href="{{ route('expense.create') }}">
                                    <i class="flaticon-home"></i>
                                    <p>Create Expense Request</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.index') }}">
                                    <i class="flaticon-home"></i>
                                    <p>My Expense Requests</p>
                                    {{-- <span class="badge badge-count">5</span> --}}
                                </a>
                            </li>
                        @endif
					</ul>
				</div>
			</div>
		</div>
