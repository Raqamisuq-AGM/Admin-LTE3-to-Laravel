  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('index') }}" class="brand-link">
          <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="{{ route('pages.profile') }}" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('widget') }}"
                          class="nav-link {{ request()->routeIs('widget') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Widgets
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li
                      class="nav-item  {{ request()->routeIs('chart.chartJs', 'chart.flot', 'chart.inline', 'chart.uplot') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('chart.chartJs', 'chart.flot', 'chart.inline', 'chart.uplot') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Charts
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('chart.chartJs') }}"
                                  class="nav-link {{ request()->routeIs('chart.chartJs') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>ChartJS</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('chart.flot') }}"
                                  class="nav-link {{ request()->routeIs('chart.flot') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Flot</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('chart.inline') }}"
                                  class="nav-link {{ request()->routeIs('chart.inline') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inline</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('chart.uplot') }}"
                                  class="nav-link {{ request()->routeIs('chart.uplot') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>uPlot</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('ui.general', 'ui.icon', 'ui.button', 'ui.modalAlert', 'ui.navTab', 'ui.slider', 'ui.timeline', 'ui.ribbon') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('ui.general', 'ui.icon', 'ui.button', 'ui.modalAlert', 'ui.navTab', 'ui.slider', 'ui.timeline', 'ui.ribbon') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              UI Elements
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li
                              class="nav-item {{ request()->routeIs('ui.general', 'ui.icon', 'ui.button', 'ui.modalAlert', 'ui.navTab', 'ui.slider', 'ui.timeline', 'ui.ribbon') ? 'active' : '' }}">
                              <a href="{{ route('ui.general') }}"
                                  class="nav-link {{ request()->routeIs('ui.general') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>General</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.icon') }}"
                                  class="nav-link {{ request()->routeIs('ui.icon') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Icons</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.button') }}"
                                  class="nav-link {{ request()->routeIs('ui.button') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Buttons</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.slider') }}"
                                  class="nav-link {{ request()->routeIs('ui.slider') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Sliders</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.modalAlert') }}"
                                  class="nav-link {{ request()->routeIs('ui.modalAlert') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Modals & Alerts</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.navTab') }}"
                                  class="nav-link {{ request()->routeIs('ui.navTab') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Navbar & Tabs</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.timeline') }}"
                                  class="nav-link {{ request()->routeIs('ui.timeline') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Timeline</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('ui.ribbon') }}"
                                  class="nav-link {{ request()->routeIs('ui.ribbon') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Ribbons</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('forms.general', 'forms.advanced', 'forms.editor', 'forms.validation') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('forms.general', 'forms.advanced', 'forms.editor', 'forms.validation') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Forms
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('forms.general') }}"
                                  class="nav-link {{ request()->routeIs('forms.general') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>General Elements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('forms.advanced') }}"
                                  class="nav-link {{ request()->routeIs('forms.advanced') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Advanced Elements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('forms.editor') }}"
                                  class="nav-link {{ request()->routeIs('forms.editor') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Editors</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('forms.validation') }}"
                                  class="nav-link {{ request()->routeIs('forms.validation') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Validation</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('table.simple', 'table.dataTable', 'table.jsGrid') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('table.simple', 'table.dataTable', 'table.jsGrid') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Tables
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('table.simple') }}"
                                  class="nav-link {{ request()->routeIs('table.simple') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simple Tables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('table.dataTable') }}"
                                  class="nav-link {{ request()->routeIs('table.dataTable') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>DataTables</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('table.jsGrid') }}"
                                  class="nav-link {{ request()->routeIs('table.jsGrid') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>jsGrid</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                      <a href="{{ route('calendar') }}"
                          class="nav-link {{ request()->routeIs('calendar') ? 'active' : '' }}">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('gallery') }}"
                          class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                              Gallery
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('kanban') }}"
                          class="nav-link {{ request()->routeIs('kanban') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-columns"></i>
                          <p>
                              Kanban Board
                          </p>
                      </a>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('mail.inbox', 'mail.read', 'mail.compose') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('mail.inbox', 'mail.read', 'mail.compose') ? 'active' : '' }}">
                          <i class="nav-icon far fa-envelope"></i>
                          <p>
                              Mailbox
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('mail.inbox') }}"
                                  class="nav-link {{ request()->routeIs('mail.inbox') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inbox</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('mail.compose') }}"
                                  class="nav-link {{ request()->routeIs('mail.compose') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Compose</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('mail.read') }}"
                                  class="nav-link {{ request()->routeIs('mail.read') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Read</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('pages.invoice', 'pages.profile', 'pages.projects', 'pages.ProjectEdit', 'pages.projectAdd', 'pages.projectDetails', 'pages.contacts', 'pages.faq', 'pages.contactUs', 'pages.eCommerce') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('pages.invoice', 'pages.profile', 'pages.projects', 'pages.ProjectEdit', 'pages.projectAdd', 'pages.projectDetails', 'pages.contacts', 'pages.faq', 'pages.contactUs', 'pages.eCommerce') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Pages
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('pages.invoice') }}"
                                  class="nav-link {{ request()->routeIs('pages.invoice') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Invoice</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.profile') }}"
                                  class="nav-link {{ request()->routeIs('pages.profile') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Profile</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.eCommerce') }}"
                                  class="nav-link {{ request()->routeIs('pages.eCommerce') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>E-commerce</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.projects') }}"
                                  class="nav-link {{ request()->routeIs('pages.projects') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Projects</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.projectAdd') }}"
                                  class="nav-link {{ request()->routeIs('pages.projectAdd') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Add</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.ProjectEdit') }}"
                                  class="nav-link {{ request()->routeIs('pages.ProjectEdit') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Edit</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.projectDetails') }}"
                                  class="nav-link {{ request()->routeIs('pages.projectDetails') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Detail</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.contacts') }}"
                                  class="nav-link {{ request()->routeIs('pages.contacts') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Contacts</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.faq') }}"
                                  class="nav-link {{ request()->routeIs('pages.faq') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>FAQ</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('pages.contactUs') }}"
                                  class="nav-link {{ request()->routeIs('pages.contactUs') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Contact us</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('extras.error404', 'extras.error500') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('extras.error404', 'extras.error500') ? 'active' : '' }}">
                          <i class="nav-icon far fa-plus-square"></i>
                          <p>
                              Extras
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Login & Register v1
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('extras.login.v1') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Login v1</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.register.v1') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Register v1</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.forget.password.v1') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Forgot Password v1</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.recover.password.v1') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Recover Password v1</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Login & Register v2
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="{{ route('extras.login.v2') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Login v2</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.register.v2') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Register v2</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.forget.password.v2') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Forgot Password v2</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="{{ route('extras.recover.password.v2') }}" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Recover Password v2</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extras.error404') }}"
                                  class="nav-link {{ request()->routeIs('extras.error404') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Error 404</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('extras.error500') }}"
                                  class="nav-link {{ request()->routeIs('extras.error500') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Error 500</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeIs('search.simple', 'search.enhanced') ? 'menu-open' : '' }}">
                      <a href="#"
                          class="nav-link {{ request()->routeIs('search.simple', 'search.enhanced') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-search"></i>
                          <p>
                              Search
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('search.simple') }}"
                                  class="nav-link {{ request()->routeIs('search.simple') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simple Search</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('search.enhanced') }}"
                                  class="nav-link {{ request()->routeIs('search.enhanced') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Enhanced</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
