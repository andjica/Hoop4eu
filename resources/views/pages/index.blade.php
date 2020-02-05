
@include('components.header')
@include('components.nav')
<div class="winter-is-coming">
  
  <div class="snow snow--near"></div>
  <div class="snow snow--near snow--alt"></div>
  
  <div class="snow snow--mid"></div>
  <div class="snow snow--mid snow--alt"></div>
  
  <div class="snow snow--far"></div>
  <div class="snow snow--far snow--alt"></div>
</div>
@include('components.main-search')
<a href="https://api.whatsapp.com/send?phone=31681616108" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<section class="section-content ">
<div class="container border">

        <div class="row p-2">
        @include('components.jobs')
        @include('components.sidebar')  
            </div>
        </div>

</section>

@include('components.slider-icons')

@include('components.footer')