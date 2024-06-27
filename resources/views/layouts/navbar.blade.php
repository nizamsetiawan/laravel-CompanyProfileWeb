<div class="menu-wrapper float-left">
    <nav id="mega-menu-holder" class="clearfix">
        <ul class="clearfix">
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ route('beranda') }}">Beranda</a>
            </li>
            <li
                class="{{ request()->is('BPH') ? 'active' : '' }}{{ request()->is('AD') ? 'active' : '' }}{{ request()->is('HRD') ? 'active' : '' }}{{ request()->is('IDD') ? 'active' : '' }}">
                <a style="pointer-events: none; cursor: default;" href="#">Kabinet</a>
                <ul class="dropdown">

                    <li><a href="{{ route('bph') }}">Badan Pengurus Harian</a>
                        <ul class="dropright ">
                            <li><a href="{{ route('bph') }}">Presiden $ wakil presiden</a></li>
                            <li><a href="{{ route('bph') }}">Sekretaris Kabinet</a></li>
                            <li><a href="{{ route('bph') }}">Keuangan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('bph') }}">PSDM dan BUDAYA</a>
                        <ul class="dropright ">
                            <li><a href="{{ route('bph') }}">DALAM NEGERI</a></li>
                            <li><a href="{{ route('bph') }}">AGAMA</a></li>
                            <li><a href="{{ route('bph') }}">PEMUDA DAN OLAHRAGA</a></li>
                            <li><a href="{{ route('bph') }}">SENI DAN BUDAYA</a></li>
                            <li><a href="{{ route('bph') }}">PENDIDIKAN</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('bph') }}">PENELITIAN dan PENGEMBANGAN</a>
                        <ul class="dropright ">
                            <li><a href="{{ route('bph') }}">Pemberdayaan Prestasi</a></li>
                            <li><a href="{{ route('bph') }}">Pengembangan Karir</a></li>
                            <li><a href="{{ route('bph') }}">Hub Luar Negeri </a></li>
                            <li><a href="{{ route('bph') }}">SENI DAN BUDAYA</a></li>
                            <li><a href="{{ route('bph') }}">PENDIDIKAN</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('bph') }}">PERGERAKAN DAN PENGABDIAN</a>
                        <ul class="dropright ">
                            <li><a href="{{ route('bph') }}">Sosial Dan Masyarakat </a></li>
                            <li><a href="{{ route('bph') }}">Advokasi Dan Kesejahteraan</a></li>
                            <li><a href="{{ route('bph') }}">Kajian Dan Aksi Strategis</a></li>
                            <li><a href="{{ route('bph') }}">Lingkungan</a></li>
                            <li><a href="{{ route('bph') }}">Pemberdayaan Perempuan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('bph') }}">TRANSFORMASI DIGITAL</a>
                        <ul class="dropright ">
                            <li><a href="{{ route('bph') }}">Riset dan Teknologi </a></li>
                            <li><a href="{{ route('bph') }}">Ekonomi Kreatif</a></li>
                            <li><a href="{{ route('bph') }}">Komunikasi dan Informasi</a></li>
                            <li><a href="{{ route('bph') }}">Reformasi Industri</a></li>
                        </ul>
                    </li>



                </ul>
            </li>
            <li
                class="{{ request()->is('tour') ? 'active' : '' }}{{ request()->is('gform') ? 'active' : '' }}{{ request()->is('event') ? 'active' : '' }}{{ request()->is('pengumuman') ? 'active' : '' }}{{ request()->is('pengumuman/*') ? 'active' : '' }}">
                <a style="pointer-events: none; cursor: default;" href="#">Info Mahasiswa</a>
                <ul class="dropdown">
                    <li><a href="{{ route('event') }}">Kalender Kegiatan FT</a></li>
                    <li><a href="{{ route('tour') }}">Campus Tour</a></li>
                    <li><a href="{{ route('gform') }}">Gform Prestasi</a></li>
                    <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('profil/*') ? 'active' : '' }}">
                <a href="{{ route('ormawa') }}">Ormawa FT</a>
            </li>
            <li class="{{ request()->is('galeri') ? 'active' : '' }}{{ request()->is('galeri/*') ? 'active' : '' }}">
                <a href="{{ route('galeri') }}">Galeri</a>
            </li>
        </ul>
    </nav>
</div>

{{-- Supaya responsive --}}
<div class="right-widget float-right">
    <ul>
        <li class="search-option">
            <div class="dropdown" style="visibility: hidden;">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </div>
        </li>
    </ul>
</div>
