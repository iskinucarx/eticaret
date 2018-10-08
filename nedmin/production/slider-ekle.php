<?php include 'header.php';



?>
<!-- page content -->




<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Ekleme <small>


            </small></h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />


            <form action="../netting/islem.php" method="POST" id="demo-form2" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="slider_resimyol"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_ad"  required="required" placeholder="Slider Adını Giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Link<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_link"   placeholder="Slider Link Giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_sira"  required="required" placeholder="Slider Sırası Gelecek" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="slider_durum" required>


                  <option value="1">Aktif</option>

                  <option value="0">Pasif</option>

                </select>
              </div>
            </div>


            <input type="hidden" name="slider_id" value="<?php echo$slidercek['slider_id'] ?>">


            <div class="ln_solid"></div>
            <div class="form-group">
              <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="sliderkaydet" class="btn btn-success">Kaydet</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <hr><hr>




</div>
</div>

<?php include 'footer.php'; ?>
