@extends('layout.master')

@section('body-class', 'page-home')

@section('content')
<div class="modules-box" id="home-modules-box">

  @hook('home.modules.before')

  @foreach($modules as $module)
    @include($module['view_path'], $module)
  @endforeach

  @if(isset($categories) && $categories->isNotEmpty())
            @foreach($categories as $category)
    <section class="module-item" id="module-categories">
      @include('design._partial._module_tool')

      <div class="module-info module-category mb-3 mb-md-5">
        <div class="module-title">{{ $category['category']->name }}</div>
        <div class="container">
          <div class="row">
                    @foreach($category['category']->products as $product)
                    <div class="product-grid col-6 col-md-4 col-lg-3">
               
                    @include('shared.product')
                </div>
                     @endforeach
          </div>
        </div>

        
      </div>
           @endforeach
    </section>
  @endif

  @hook('home.modules.after')

</div>
@endsection

@section('styles')
</style>
@endsection
