<div class="sidebar-menu">
    <ul class="menu">

      <li
          class="sidebar-item  has-sub">
          <a href="#" class='sidebar-link'>
              <i class="bi bi-grid-1x2-fill"></i>
              <span>Anasayfa</span>
          </a>
          <ul class="submenu ">
              <li class="submenu-item ">
                  <a href="{{route('yonetim')}}">Anasayfa</a>
              </li>


          </ul>
      </li>





        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Mesajlar</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('ozelmesaj')}}">Özel Mesaj Gönder</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('gelenmesajlar')}}">Gelen Mesajlar</a>
                </li>

            </ul>
        </li>
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Kullanıcılar</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('kullanicilar')}}">Kullanıcılar</a>
                </li>

            </ul>
        </li>
         <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Profil</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('profilduzenle')}}">Profili Düzenle</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('cikis')}}">Çıkış Yap</a>
                </li>


            </ul>
        </li>


    </ul>
</div>
