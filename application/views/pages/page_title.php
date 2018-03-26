<!-- Page Title Area Start -->
<div id="pageTitle" class="bg--overlay" data-bg-img="img/page-header-img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h2><?= @$page_title ?></h2>
                </div>
            </div>
            
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><span>You are here:</span></li>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li class="active"><?= @$page_title ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Area End -->