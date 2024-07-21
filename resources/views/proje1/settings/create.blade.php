@extends("proje1.layout")
@section("content")
@section("title" , "Resim Ekle")

<div class="container pt-3">
  <div class="card-header">
    Profili Düzenle
  </div>

  <form action="#" method="post" enctype="multipart/form-data">
    @csrf
                        <div class="row mt-4 pl-3">
                            <div class="col-xs-12">
                                <input class="form-control border border-white" type="file"  name="dosya">
                            </div>
                        </div>
                        <div align="left" class="mt-4 pl-3">
                            <button type="submit" class="btn-success">Ekle</button>
                        </div> 

                   
</form>
  
  
</div>  

 




@endsection
@section("css") @endsection
@section("js") @endsection
