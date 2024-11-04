<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                
                <li>
                    <a href="users.html"><i data-feather="users"></i> <span>Users</span></a>
                </li>
                
                <li>
                    <a href="recycling-centers.html"><i data-feather="map-pin"></i> <span>Recycling Centers</span></a>
                </li>
                <li>
                    <a href="withdrawn.html"><i data-feather="user-check"></i> <span>Withdrawn</span></a>
                </li>
                <li>
                    <a href="transaction.html"><i data-feather="clipboard"></i> <span>Reclamation</span></a>
                </li>
            
                <li>
                    <a href="collectors.html"><i data-feather="truck"></i> <span>Waste Collectors</span></a>
                </li>
                <li>
    <a href="{{ route('calendar') }}"><i data-feather="calendar"></i> <span>Calendar</span></a>
</li>

                <li>
                    <a href="reports.html"><i data-feather="pie-chart"></i> <span>Reports</span></a>
                </li>
                <li>
                    <a href="roles.html"><i data-feather="clipboard"></i> <span>Roles</span></a>
                </li>
                <li>
                    <a href="skills.html"><i data-feather="award"></i> <span>Skills</span></a>
                </li>
                <li>
                    <a href="verify-identity.html"><i data-feather="user-check"></i> <span>Verify Identity</span></a>
                </li>
                <li>
                    <a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title"><span>UI Interface</span></li>
                <li>
                    <a href="components.html"><i data-feather="pocket"></i> <span>Components</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="file-minus"></i> <span> Forms</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                        <li><a href="form-input-groups.html">Input Groups</a></li>
                        <li><a href="form-horizontal.html">Horizontal Form</a></li>
                        <li><a href="form-vertical.html">Vertical Form</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="align-justify"></i> <span> Tables</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="data-tables.html">Data Table</a></li>
                    </ul>
                </li>

                <!-- Connexion/Déconnexion -->
                @auth
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                           <i data-feather="log-out"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}"><i data-feather="log-in"></i> <span>Login</span></a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</div>
