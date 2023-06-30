 <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
     <div class="aside-logo flex-column-auto" id="kt_aside_logo">
         <a href="">
             <h4 class="text-white">DIGITAL WEBKU</h4>
             
         </a>
         <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">
             <span class="svg-icon svg-icon-1 rotate-180">
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                         <polygon points="0 0 24 0 24 24 0 24" />
                         <path
                             d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                             fill="#000000" fill-rule="nonzero"
                             transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                         <path
                             d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                             fill="#000000" fill-rule="nonzero" opacity="0.5"
                             transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                     </g>
                 </svg>
             </span>
         </div>
     </div>
     <div class="aside-menu flex-column-fluid">
         <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
             data-kt-scroll-offset="0">
             <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                 id="#kt_aside_menu" data-kt-menu="true">
                 <div class="menu-item">
                     <div class="menu-content pb-2">
                         <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                     </div>
                 </div>
                 <div class="menu-item">
                     <a class="menu-link <?php if(Route::is('home')): ?> active <?php endif; ?>" href="<?php echo e(route('home')); ?>">
                         <span class=" menu-icon">
                             <i class="bi bi-house fs-3"></i>
                         </span>
                         <span class="menu-title">Dashboard</span>
                     </a>
                 </div>

                 <div class="menu-item">
                     <div class="menu-content pt-8 pb-2">
                         <span class="menu-section text-muted text-uppercase fs-8 ls-1">Master Data</span>
                     </div>
                 </div>

                 <div data-kt-menu-trigger="click" class="menu-item  <?php if(Route::is('kategori.index') || Route::is('kategoriberita.index') || Route::is('layanan.index')  ): ?> show <?php endif; ?> menu-accordion">
                     <span class="menu-link">
                         <span class="menu-icon">
                             <i class="bi bi-clipboard-data fs-2"></i>
                         </span>
                         <span class="menu-title">Master Data</span>
                         <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion menu-active-bg">
                         <div class="menu-item ">
                             <a class="menu-link <?php if(Route::is('kategori.index')): ?> active <?php endif; ?>"
                                 href="<?php echo e(route('kategori.index')); ?>">
                                 <span class="menu-icon">
                                     <i class="bi bi-app fs-3"></i>
                                 </span>
                                 <span class="menu-title">Kategori Files</span>
                             </a>
                         </div>
                         <div class="menu-item ">
                            <a class="menu-link <?php if(Route::is('kategoriberita.index')): ?> active <?php endif; ?>"
                                href="<?php echo e(route('kategoriberita.index')); ?>">
                                <span class="menu-icon">
                                    <i class="bi bi-app fs-3"></i>
                                </span>
                                <span class="menu-title">Kategori Berita</span>
                            </a>
                        </div>
                     </div>
                 </div>

                 <div class="menu-item">
                     <div class="menu-content pt-8 pb-2">
                         <span class="menu-section text-muted text-uppercase fs-8 ls-1">Data</span>
                     </div>
                 </div>

                 <div class="menu-item">
                     <a class="menu-link <?php if(Route::is('berita.index') || Route::is('berita.create') || Route::is('berita.edit')): ?> active <?php endif; ?>"
                         href="<?php echo e(route('berita.index')); ?>">
                         <span class="menu-icon">
                             <i class="bi bi-newspaper fs-3"></i>
                         </span>
                         <span class="menu-title">Berita</span>
                     </a>
                 </div>
                 <div class="menu-item">
                     <a class="menu-link <?php if(Route::is('halaman.index') || Route::is('halaman.create') || Route::is('halaman.edit')): ?> active <?php endif; ?>"
                         href="<?php echo e(route('halaman.index')); ?>">
                         <span class="menu-icon">
                             <i class="bi bi-newspaper fs-3"></i>
                         </span>
                         <span class="menu-title">Halaman </span>
                     </a>
                 </div>

                 <div class="menu-item">
                     <a class="menu-link <?php if(Route::is('dokumen.index')): ?> active <?php endif; ?>"
                         href="<?php echo e(route('dokumen.index')); ?>">
                         <span class=" menu-icon">
                             <i class="bi bi-card-list fs-3"></i>
                         </span>
                         <span class="menu-title">Dokumen</span>
                     </a>
                 </div>

                 

                 <div class="menu-item">
                     <a class="menu-link <?php if(Route::is('banner.index')): ?> active <?php endif; ?>"
                         href="<?php echo e(route('banner.index')); ?>">
                         <span class=" menu-icon">
                             <i class="bi bi-images fs-3"></i>
                         </span>
                         <span class="menu-title">Banner</span>
                     </a>
                 </div>

                 <div class="menu-item">
                    <a class="menu-link <?php if(Route::is('pegawai.index')): ?> active <?php endif; ?>"
                        href="<?php echo e(route('pegawai.index')); ?>">
                        <span class=" menu-icon">
                            <i class="bi bi-images fs-3"></i>
                        </span>
                        <span class="menu-title">Pegawai</span>
                    </a>
                </div>


             </div> 



             <div class="menu-item">
                 <div class="menu-content pt-8 pb-2">
                     <span class="menu-section text-muted text-uppercase fs-8 ls-1">Pengaturan</span>
                 </div>
             </div>

             <div class="menu-item">
                <a class="menu-link <?php if(Route::is('identitas.index')): ?> active <?php endif; ?>"
                    href="<?php echo e(route('identitas.index')); ?>">
                    <span class=" menu-icon">
                        <i class="bi bi-display fs-3"></i>
                    </span>
                    <span class="menu-title">Profil Website</span>
                </a>
            </div>


            <div class="menu-item">
                <a class="menu-link <?php if(Route::is('sambutan.index')): ?> active <?php endif; ?>"
                    href="<?php echo e(route('sambutan.index')); ?>">
                    <span class=" menu-icon">
                        <i class="bi bi-person-badge fs-3"></i>
                    </span>
                    <span class="menu-title">Sambuatan Kepala </span>
                </a>
            </div>

            <div class="menu-item">
                <a class="menu-link <?php if(Route::is('galeri.gambar')): ?> active <?php endif; ?>"
                    href="<?php echo e(route('galeri.gambar')); ?>">
                    <span class=" menu-icon">
                        <i class="bi bi-images fs-3"></i>
                    </span>
                    <span class="menu-title">Galeri Gambar</span>
                </a>
            </div>



             <div class="menu-item">
                 <a class="menu-link <?php if(Route::is('menu.index')): ?> active <?php endif; ?>"
                     href="<?php echo e(route('menu.index')); ?>">
                     <span class=" menu-icon">
                         <i class="bi bi-card-list fs-3"></i>
                     </span>
                     <span class="menu-title">Menu</span>
                 </a>
             </div>



             <div class="menu-item">
                 <a class="menu-link <?php if(Route::is('user.index')): ?> active <?php endif; ?>"
                     href="<?php echo e(route('user.index')); ?>">
                     <span class=" menu-icon">
                         <i class="bi bi-person fs-3"></i>
                     </span>
                     <span class="menu-title">User Management</span>
                 </a>
             </div>
         </div>
     </div>
 </div>
<?php /**PATH /Users/asrulramadhan/Laravel/digitalwebku/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>