<?php include 'common/header.php'; ?>
<?php include 'common/single-uni-header.php'; ?>
<style type="text/css">
  a.fancybox.w-100 img {
    height: 200px;
    object-fit: cover;
}
</style>
<?php foreach ($college_data as $college): ?>
<div class="col-md-9">
<div class="article-tab my-3">
<div class="tab-content bg-white">
    <div class="row">
      <div class="col-sm-6">
        <h5><strong>GALLERY IMAGES</strong></h5>
      </div>
      <div class="col-sm-6">
        <div class="head-desc">
          
        </div>
      </div>
    </div>
    <hr class="my-3">
    <div class="row">
      <?php $gallery = explode(',', $college->gallery) ?>
     
      <?php for ($i=0; $i < count($gallery) ; $i++) { ?>
      <div class="col-sm-3">
        <div class="fancybox-main">
          <a class="fancybox w-100" href="<?php echo base_url() ?>/assets/images/gallery/<?php echo $gallery[$i] ?>">
            <img class="w-100" src="<?php echo base_url() ?>/assets/images/gallery/<?php echo $gallery[$i] ?>" alt=""/>
          </a>
        </div>
      </div>
      <?php  } ?>
    
    </div>
  </div>
  </div>
</div>
  <?php endforeach ?>
<?php include 'common/single-uni-side.php'; ?>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
    $(".fancybox")
      .attr('rel', 'gallery')
      .fancybox({
        padding : 0
    });
</script>