<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('infoharga') ? 'active' : ''}}"><a href="/infoharga"><i class="fa fa-dashboard"></i> <span>infoharga</span></a></li>
        <li class="{{request()-> is('sewa') ? 'active' : ''}}"><a href="/sewa"><i class="fa fa-dashboard"></i> <span>Sewa</span></a></li>
        <li class="{{request()-> is('rekapsewa') ? 'active' : ''}}"><a href="/rekapsewa"><i class="fa fa-dashboard"></i> <span>Rekap Sewa</span></a></li>
        <li class="treeview">
          
      
      </ul>