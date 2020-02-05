@include('components.header')
@include('components.nav')

@include('components.main-search')
<a href="https://api.whatsapp.com/send?phone=31614434966" class="float" target="_blank">
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