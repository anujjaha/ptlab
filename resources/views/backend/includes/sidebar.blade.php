<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('admin.dashboard.index') }}" class="d-block">{{ access()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Quick Access</li>
                @if(auth()->user()->id == 1)
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.account.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Accounts
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('admin.report_types.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Report Types
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.patient.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Patients
                        </p>
                    </a>
                </li>  
                <li class="nav-item">
                    <a href="{{ route('admin.patientreport.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Patient Report
                        </p>
                    </a>
                </li> 
                <!-- <li class="nav-item">
                    <a href="{{ route('admin.patientreportdetails.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Patient Report Details
                        </p>
                    </a>
                </li> -->
               <!--  <li class="nav-item">
                    <a href="{{ route('admin.watsappmessage.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Watsapp Message
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="{{ route('admin.samplecollector.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Sample Collector
                        </p>
                    </a>
                </li> 
                            
            </ul>
        </nav>
    </div>
</aside>