@extends('layouts.master')

@section('title')
Menovahub-Disucss
@endsection

@section('style')
@endsection

@section('content')
<!-- Breadcrumbs -->
<section class="breadcrumbs">

<div class="container">
  <div class="breadcrumbs-text ">
    <ol>
      <li><a href="/" class="breadcrumbs-link"></a>Home</li>
      <li><a href="/about" class="breadcrumbs-link">about</a></li>
      <li><a href="/services" class="breadcrumbs-link">services</a></li>
      <li><a href="/connect" class="breadcrumbs-link">connect</a></li>
      <li><a href="/raise" class="breadcrumbs-link">raise</a></li>
      <li><a href="/discuss" class="breadcrumbs-link">discuss</a></li>
    </ol>
    <h1>comments</h1>
  </div>
</div>
</section>

<!-- End Breadcrumbs -->
<section class="discuss-single sec-padding">
<div class="container-fluid   " data-aos="fade-up">
  <div class="row justify-content-center">
    <div class="col-md-9 ">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <ul class="list-inline m-3">
            <li class="list-inline-item"><i class="bi bi-person"></i> <a href="/discuss-single"> John Doe</a></li>
            <li class="list-inline-item">
                <i class="bi bi-clock"></i>
                <a href="/discuss-single"><time
                  datetime="2020-01-01"> Jan 1, 2020</time></a></li>
          </ul>

          <p class="card-text "> في الاقتصاد السياسي تعرف ريادة الأعمال بإنها أسلوب يوفر أطار لكيفية تحويل الفكرة العظيمة إلي عمل تجاري عظيم، مرورًا بكافة مراحل التأسيس والنمو والتمويل بطريقة فعالة وغير تقليدية، مع الحرص على الاستمرارية؛ بغية الحصول على ربح وتحقيق الاستقلال المالي، من خلال تنمية شركة ناشئة تخلق الإلفة والانطباع الإيجابي لدى العملاء والموردين والمستثمرين.

ريادة الأعمال ليست شيئا سهلا حيث أن معظم الشركات الجديدة -غير المنظمة جيدا- وتختلف أنشطة ريادة الأعمال بأختلاف نوع النشاط الذي تتبعه هذه المنظمة الناشئة. وتتراوح ريادة الأعمال بين شركات فردية (غالبا ما يعمل فيها الرائد بمفرده بدوام جزئي) وتعهدات بتوفير فرص عمل جديدة.</p>

            <hr class="mt-4 mb-2">
            <label for="comment" class="form-label">Comments </label>

            <div class = 'm-4'>

              <ul class="list-inline m-2">
                <li class="list-inline-item"><i class="bi bi-person"></i> <a href="/discuss-single"> John Doe</a></li>
                <li class="list-inline-item"><i class="bi bi-clock"></i> <a href="/discuss-single"><time
                      datetime="2020-01-01"> Jan 1, 2020</time></a></li>
              </ul>

              <p class="card-text "> 2 With supporting text below as a natural lead-in to additional cفي الاقتصاد السياسي تعرف ريادة الأعمال بإنها أسلوب يوفر أطار لكيفية تحويل الفكرة العظيمة إلي عمل تجاري عظيم، مرورًا بكافة مراحل التأسيس والنمو والتمويل بطريقة فعالة وغير تقليدية، مع الحرص على الاستمرارية؛ بغية الحصول على ربح وتحقيق الاستقلال المالي، من خلال تنمية شركة ناشئة تخلق الإلفة والانطباع الإيجابي لدى العملاء والموردين والمستثمرين.

ريادة الأعمال ليست شيئا سهلا حيث أن معظم الشركات الجديدة -غير المنظمة جيدا- وتختلف أنشطة ريادة الأعمال بأختلاف نوع النشاط الذي تتبعه هذه المنظمة الناشئة. وتتراوح ريادة الأعمال بين شركات فردية (غالبا ما يعمل فيها الرائد بمفرده بدوام جزئي) وتعهدات بتوفير فرص عمل جديدة.</p>

            </div>
            <div class = 'm-4'>

              <ul class="list-inline m-2">
                <li class="list-inline-item"><i class="bi bi-person"></i> <a href="/discuss-single"> John Doe</a></li>
                <li class="list-inline-item"><i class="bi bi-clock"></i> <a href="/discuss-single"><time
                      datetime="2020-01-01"> Jan 1, 2020</time></a></li>
              </ul>

              <p class="card-text ">3 With supporting text below as a natural lead-in to additional contentWith supporting text
                below as a natural lead-in to additional contentWith supporting text below as a natural lead-in to
                additional contentWith supporting text below as a natural lead-in to additional contentWith supporting text
                below as a natural lead-in to additional contentWith supporting text below as a natural lead-in to
                additional content.</p>

            </div>
            <hr class="mt-4 mb-2">
        <form class='' action = "" method='POST' enctype="multipart/form-data">
          <div class="mb-3">
            <label for="reply" class="form-label">Reply </label>
            <input type="text" class="form-control" id="reply" name='reply' required
                placeholder='Please Enter Your Reply'>
          </div>
          <div class="row justify-content-end">
            <div class="col-md-3">
              <button type="submit" class="btn btn-sub col-12" id = 'post' name  = 'post' >Post</button>
            </div>
          </div>

        </form>
        </div>
      </div>


    </div>
  </div>
</div>
</section>
@endsection

@section('script')
@endsection
