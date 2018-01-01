  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      @if(!auth()->user()->su)
      <form action="/students" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..." minlength="3">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->
      @endif

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        @foreach(menu() as $item)
                @if (isset($item['items']))
                  <li class="treeview {{ isActive($item['items']) }}">
                    <a href="#"><i class="fa {{ isset($item['icon']) ? $item['icon'] : 'fa-link'}}"></i> <span>{{ $item['name'] }}</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                      @foreach($item['items'] as $submenu)
                        <li class="active">
                          <a href="/{{ $submenu['url'] }}">
                            <i class="fa {{ isset($submenu['icon']) ? $submenu['icon'] : 'fa-link'}}"></i> 
                            <span>{{ $submenu['name'] }}</span>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                @else
                  <li class="{{ isActive($item['url']) }}">
                    <a href="/{{$item['url']}}">
                      <i class="fa {{ $item['icon'] ? $item['icon'] : 'fa-link'}}"></i> 
                      <span>{{$item['name']}}</span>
                    </a>
                  </li>
                @endif
        @endforeach
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>