@extends('layouts.master')

@section('title')
@endsection

@section('style')
@endsection

@section('content')
<section class="breadcrumbs">
    <div class="container">
      <div class="breadcrumbs-text">
        <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/">my projects</a></li>
        </ol>
      </div>
    </div>
  </section>
<section class=" inner-my-projects">
  <div class="container">

    <header class="sec-inner-heading d-flex justify-content-around align-items-center sec-padding">
        <h2> My projects </h2>
        <div class = "col-md-5">

   <button id="myBtn" class="btn btn-sub m-left"> + add project</button>

        <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <form class='' action = "" method='POST' enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name='title' required
                            placeholder='Please Enter Your Title'>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Discuss Now </label>
                        <textarea class="form-control" id="body" name='body' required
                            placeholder='Please Enter Your question'></textarea>
                    </div>
                    <div class="input-group mb-5">
                       <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>choose your city</option>
                            <option value="1">one</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-5">
                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>choose your category</option>
                            <option value="1">one</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">

                <button type="submit" id ='upload' name = 'upload' class="btn btn-sub">
                    <i class="bi bi-arrow-bar-up"></i> upload</button>
                </div>
            </form>
        </div>

    </div>

</div>

    </header>

    <div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card mb-5" >
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card mb-5">
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card mb-5">
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4  col-sm-6 col-xs-12">
          <div class="card mb-5">
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4  col-sm-6 col-xs-12">
          <div class="card mb-5">
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4  col-sm-6 col-xs-12">
          <div class="card mb-5">
            <img src="assets/img/projects/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-center ">
                <a href="#" class="card-link btn btn-sub2">delete</a>
            </div>
            </div>
        </div>
   </div>
   <!-- end row-->
  </div>
</section>
@endsection

@section('script')
@endsection
