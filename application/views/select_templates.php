<!-- Templates Area Start -->
<div id="templates" class="page">
    <div class="container">
      <div class="row" style="margin: 25px 0px;">
        <div class="col-md-12">
          <div class="widget text-center">
              <h2 class="widget-title">Pilih Template WordPress Anda!</h2>
          </div>
        </div>
        <?php for($i = 0; $i <= 5; $i++): ?>
        <div class="col-md-4 text-center" style="margin: 10px 0px;">
          <img src="<?= base_url() ?>resources/img/pattern.jpg" class="img-responsive" style="margin-bottom: 7px;" />
          <a href="<?= base_url().'order?ref='.$this->input->get('ref'); ?>" class="btn btn-info" style="text-transform: uppercase">Pilih Template!</a> 
        </div>
        <?php endfor; ?>
      </div>
    </div>
</div>
<!-- Templates Area End -->