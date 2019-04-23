<div class="az-sidebar-header">
    <a href="index.html" class="az-logo">az<span>i</span>a</a>
</div><!-- az-sidebar-header -->
<div class="az-sidebar-loggedin">
    <div class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
    <div class="media-body">
        <h6>{{auth()->user()->first_name}}</h6>
        <span>
            @foreach(\Spatie\Permission\Models\Permission::all() as $per)
                @can($per->name)
                    {{$per->name}}
                @endcan
            @endforeach
        </span>
    </div><!-- media-body -->
</div><!-- az-sidebar-loggedin -->
<div class="az-sidebar-body">
    <ul class="nav">
        <li class="nav-label">Main Menu</li>
        <li class="nav-item">
            <a  data-toggle="modal" data-target="#serviceBookingModel" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Accounts Overview</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="service_ptnr_db.html" class="nav-sub-link">Service Partners</a></li>
                <li class="nav-sub-item"><a href="inventory_ptnr_db.html" class="nav-sub-link">Inventory Partner</a>
                </li>
                <li class="nav-sub-item"><a href="towing_ptnr_db.html" class="nav-sub-link">Towing Partners</a></li>
                <li class="nav-sub-item"><a href="collusion_ptnr_db.html" class="nav-sub-link">Collusion Center
                        Partners</a></li>
                <li class="nav-sub-item"><a href="banking_ptnr_db.html" class="nav-sub-link">Banking Partners</a></li>
                <li class="nav-sub-item"><a href="insurance_ptnr_db.html" class="nav-sub-link">Insurance Partners</a>
                </li>
            </ul>
        </li>
        <!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-chart-bar-outline"></i>Payments</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="service_overview.html" class="nav-sub-link">Overview</a></li>
                <li class="nav-sub-item"><a href="chart-flot.html" class="nav-sub-link">Qucik Pay</a></li>
                <li class="nav-sub-item"><a href="chart-chartjs.html" class="nav-sub-link">Payment History</a></li>
                <li class="nav-sub-item"><a href="chart-peity.html" class="nav-sub-link">Quick Pay FAQ</a></li>
            </ul>
        </li><!-- nav-item -->
        @if(auth()->user()->hasRole('admin'))
            <li class="nav-item">
                <a href="" class="nav-link with-sub"><i class="icon ion-ios-locate"></i>Service Management</a>
                <ul class="nav-sub">
                    <li class="nav-sub-item"><a href="{{route('admin.service-category.index')}}" class="nav-sub-link">Service
                            Category</a></li>
                    <li class="nav-sub-item"><a href="{{route('admin.service.index')}}" class="nav-sub-link">Service</a>
                    </li>
                </ul>
            </li><!-- nav-item -->
        @endif
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-map"></i>Refferals</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="refferals_db.html" class="nav-sub-link">Overview</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Rewards</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="rewards_db.html" class="nav-sub-link">Overview</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Support</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="table-basic.html" class="nav-sub-link">Overview</a></li>
            </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Settings</a>
            <ul class="nav-sub">
                <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Overview</a></li>
                <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Profile</a></li>
                <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Banking</a></li>
                <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Documents</a></li>
                <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Service Profile</a></li>
            </ul>
        </li><!-- nav-item -->
    </ul><!-- nav -->
</div><!-- az-sidebar-body -->
