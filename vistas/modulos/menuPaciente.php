<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <ul class="sidebar-menu">
        
        <li>
          <a href="http://67.205.147.53/clinica/inicio">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li>
          <a href="http://67.205.147.53/clinica/Ver-consultorios">
            <i class="fa fa-medkit"></i>
            <span>Consultorios</span>
          </a>
        </li>

        <li>
        <?php
        echo '  <a href="http://67.205.147.53/clinica/historial/'.$_SESSION["id"].'">';
        ?>
            <i class="fa fa-calendar-check-o"></i>
            <span>Historial</span>
          </a>
        </li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>