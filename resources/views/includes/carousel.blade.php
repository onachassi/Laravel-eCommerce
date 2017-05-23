<section class='carousel-section'>
<div id="sample-product-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#sample-product-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#sample-product-carousel" data-slide-to="1"></li>
    <li data-target="#sample-product-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ URL::asset('/src/images/img-1.jpg') }}" alt="image1">
      <div class="carousel-caption">
        <h3>Surf</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::asset('/src/images/img-2.jpg') }}" alt="image2">
      <div class="carousel-caption">
        <h3>Coffee</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::asset('/src/images/img-3.jpg') }}" alt="image3">
      <div class="carousel-caption">
        <h3>Code</h3>
      </div>
    </div>
  </div>

<script>
  $('.carousel').carousel({
  interval: 2000
  })
</script>

  <!-- Controls -->
  <!-- <a class="left carousel-control" href="#sample-product-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#sample-product-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
</section>