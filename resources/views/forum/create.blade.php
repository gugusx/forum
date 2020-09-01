@extends('layouts.app')
@section('title','Buat Pertanyaan')
@section('content')
<div class="container">
     <div class="jumbotron" id="tc_jumbotron">
        <div class="col-md-8 offset-md-2">
          <div class="text-center"><h3 style="color: #fff;">Tambah Diskusi</h3></div><hr style="background: #fff"> 
        </div>
      <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card"> 
                <div class="card-body">
                   <form action="{{route('forum.store')}}" method="post"  enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" id="tc_input" class="form-control" name="title" placeholder="Judul"> 
                    </div>
                    
                   <div class="des"> 
                 <a class="btn btn_tc btn-block" data-toggle="collapse" data-target="#description-textarea" style="color: #777">Pertanyaan</a> 
              <div id="description-textarea" class="collapse">     
                <div class="bg">
                   <div class="form-group">
                        <textarea type="text" class="form-control" id="tc_input" name="description" placeholder="Pertanyaan"> </textarea>
                      </div>
                </div> 
              </div>             
            </div>
               <div class="form-group">
                <select name="tags[]" multiple="multiple" id="tc_input" class="form-control tags" id="">
                        @foreach($tags as $tag)
                         <option value="{{$tag->id}}">{{$tag->name}}</option>
                         @endforeach
                       </select>
                    </div>
            
            
             <button type="submit" class="btn btn-success btn-block">Kirim</button>
               </form>
              </div>
              </div>
           <br>

          <div class="alert alert-info alert-dismissible fade show" role="alert">
          @forelse($forums as $forum)
          <b>Pertanyaan Terakhir Anda:</b><br>

           <a href="#" style="color: #444"><h5 style="margin-top: 4px;"><i class="fa fa-newspaper-o"></i> {{$forum->title}}</h5></a> 
           @empty
        <strong> Pertanyaan baru akan muncul disini.</strong><br> 
          @endforelse
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">

$(".tags").select2({
    placeholder: "Pilih Tags",
    maximumSelectionLength: 2
});
</script>
@endsection
