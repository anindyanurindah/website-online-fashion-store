<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include"../../config.php";
$e=$_GET['id'];
$edit=mysqli_query($con,"SELECT * FROM buku JOIN kategori ON kategori.id_ketegori = buku.id_ketegori WHERE id_buku='$e'");
$book = mysqli_fetch_array($edit);
?>
<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Edit Buku</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                	<div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="pro-edt-img">
                                                                    <img src="../../gambar/<?php  echo $book['gambar'];?>" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="row">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                	<form method="post" class="form-group" action="e_book.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="judul" placeholder="Nama Produk" class="form-control"  value =" <?php  echo $book['judul'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" name="harga" placeholder="Harga" class="form-control" value =" <?php  echo $book['harga'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" name="stok" placeholder="Stok" class="form-control" value =" <?php  echo $book['stok'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="text" name="halaman" placeholder="Asal Kota" class="form-control" value =" <?php  echo $book['halaman'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="penerbit" placeholder="Merek" class="form-control" value =" <?php  echo $book['penerbit'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="pengarang" placeholder="Jenis Bahan" class="form-control" value =" <?php  echo $book['pengarang'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="file" name="gambar" placeholder="Gambar" class="form-control" value =" <?php  echo $book['gambar'];?>" >
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                       <select name="kat" class="form-control">
                                                       	<option selected><?php  echo $book['kategori'];?></option>
														<?php
												 			$d = mysqli_query($con,"SELECT * from kategori");
												 			while($data = mysqli_fetch_array($d)){ ?>;
												 			<option> <?php echo $data['kategori']; ?> </option>
												 			<?php } ?>
														</select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="simpan">Add
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light"><a href="product-edit.html">Reset</a>
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>