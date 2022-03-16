<aside class="app-sidebar">
    <ul class="app-menu">
      <li>
        <a  <?= $title == 'dashboard' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin');?>"><i class="app-menu__icon fa-solid fa-house"></i><span
            class="app-menu__label">Dashboard</span></a>
      </li>
      <li>
        <a <?= $title == 'pembayaran' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin/pembayaran');?>"><i class=" app-menu__icon fa-solid fa-credit-card"></i><span
            class="app-menu__label">Pembayaran</span></a>
      </li>
      <li>
        <a <?= $title == 'data pelanggan' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin/data_pelanggan');?>"><i class="app-menu__icon fa-solid fa-user-group"></i><span
            class="app-menu__label">Data
            Pelanggan</span></a>
      </li>
      <li>
        <a <?= $title == 'pelaporan' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin/pelaporan');?>"><i class="app-menu__icon fa-solid fa-book"></i><span
            class="app-menu__label">Pelaporan</span></a>
      </li>
      <li>
        <a <?= $title == 'menu' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin/menu');?>"><i class="app-menu__icon fa-solid fa-book"></i><span
            class="app-menu__label">Kelola Menu</span></a>
      </li>
      <li>
        <a <?= $title == 'profile' || $title == '' ? 'class="app-menu__item active"' : 'class="app-menu__item"' ?> href="<?=base_url('admin/profile');?>"><i class="app-menu__icon fa-solid fa-book"></i><span
            class="app-menu__label">Profile admin</span></a>
      </li>
      
      <li>
        <a class="app-menu__item " href="<?=base_url('auth/logout');?>"><i
            class="app-menu__icon fa-solid fa-arrow-right-from-bracket"></i><span
            class="app-menu__label">keluar</span></a>
      </li>
    </ul>
    <ul class="app-menu marbo">
      <!-- <li>
        <a onclick="myFunction()" class="app-menu__item " href="#"><i
            class="app-menu__icon fa-solid fa-lightbulb "></i><span class="app-menu__label">Mode
            Gelap</span></a>
      </li> -->
      <li>
        <span class="app-menu__item" href="#"><i class="app-menu__icon fa-solid fa-copyright copyright"></i><span
            class="app-menu__label copyright">Copyright PAMDES
            2022</span></span>
      </li>
    </ul>
  </aside>