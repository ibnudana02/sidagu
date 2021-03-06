 <section class="content">
     <div class="container-fluid">
         <div class="block-header">
             <h2>
                 Data Sekolah
                 <small>
                     <ol class="breadcrumb breadcrumb-col-pink">
                         <li><a href="<?php echo base_url(); ?>"><i class="material-icons">home</i> Home</a></li>
                         <li class="active"><i class="material-icons">library_books</i> <?php //echo $judul 
                                                                                        ?></li>
                     </ol>
                 </small>
             </h2>
         </div>
         <!-- Example -->
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <h2>
                             EXPORTABLE TABLE
                         </h2>
                         <ul class="header-dropdown m-r--5">
                             <li class="dropdown">
                                 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                     <i class="material-icons">more_vert</i>
                                 </a>
                                 <ul class="dropdown-menu pull-right">
                                     <li><a href="javascript:void(0);">Action</a></li>
                                     <li><a href="javascript:void(0);">Another action</a></li>
                                     <li><a href="javascript:void(0);">Something else here</a></li>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                     <div class="body">
                         <div class="body">
                             <?php foreach ($hasil as $d) {

                                    $a = $d->id;
                                    // $s = $d->Number;

                                    //echo var_dump($d);

                                ?>
                                 <form id="form_advanced_validation" action="<?php echo base_url(); ?>halaman/updateuser" method="POST" novalidate="novalidate">

                                     <label for="email_address">Username</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input type="text" value="<?php echo $d->username ?>" id="username" name="username" class="form-control">
                                         </div>
                                     </div>
                                     <label for="email_address">Nama Lengkap</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input type="text" value="<?php echo $d->nama_lengkap ?>" id="nama_lengkap" name="nama_lengkap" class="form-control">
                                         </div>
                                     </div>
                                     <label for="email_address">Status</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input name="stts" type="radio" value="admin" class="with-gap" id="radio_1" <?php echo set_radio('admin', 'member', 'pegawai'); ?> />
                                             <label for="radio_1">Admin</label>
                                             <input name="stts" type="radio" value="member" class="with-gap" id="radio_2" <?php echo set_radio('admin', 'member', 'pegawai'); ?> />
                                             <label for="radio_2">Member</label>
                                             <input name="stts" type="radio" value="pegawai" class="with-gap" id="radio_3" <?php echo set_radio('admin', 'member', 'pegawai'); ?> />
                                             <label for="radio_3">Pegawai</label>
                                         </div>
                                     </div>
                                     <label for="email_address">Alamat</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <textarea type="text" value="<?php echo $d->alamat ?>" id="alamat" name="alamat" class="form-control"></textarea>
                                         </div>
                                     </div>
                                     <label for="email_address">Email</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <input type="email" value="<?php echo $d->email ?>" id="email" name="email" class="form-control">
                                         </div>
                                     </div>
                                     <label for="email_address">Gambar</label>
                                     <div class="form-group">
                                         <div class="form-line">
                                             <img src="<?php echo base_url() ?>gambar/<?php echo $d->nama_file ?>" width="100" alt="" name="gambar">
                                             <input type="file" id="gambar" name="gambar" class="form-control">
                                         </div>
                                     </div>


                                     <br><br>

                                     <button class="btn btn-primary waves-effect" type="submit">Update</button>
                                 </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- #END# Example -->
     </div>
 </section>
 <?php } ?>