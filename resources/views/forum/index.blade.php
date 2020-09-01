@extends('layouts.app')
@section('title','Forum')
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body" id="xx" style="color: #fff;     border:1px solid #fff;">
        <div class="text-center"> 
           <h1 style="    font-size: 3.5rem;">FORUM</h1> 
        <p>Forum tanya jawab seputar online course. </p>  
          </div>
        </div> 
      </div> 
    </div>  
        <div class="container"> 
            <div class="row">
             <div class="col-md-12" id="tc_container_wrap">
            <div class="card" id="tc_paneldefault"> 
                <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;">  
               <div class="row">
               <div class="col-md-8" style="    padding-right: 0;"><br>
                <table class="table table-bordered">
              <thead id="tc_thead">
                <tr>
                  <th scope="col" class="text-center">Pertanyan</th>
              
                  <th scope="col" class="text-center">Keterangan</th>
                </tr>
              </thead>
              <tbody style="background: #f9f9f9;"> 
              @foreach($forums as $forum)
                <tr> 
                <td width="453">
                <div class="forum_title">
                <h4> <a href="{{route('forum.show', $forum->slug)}}">{{ Str::limit($forum->title, 35) }}</a></h4>
                <p>  {{ Str::limit($forum->description, 50) }}</p> 
                @foreach($forum->tags as $tag)
                <a href="#" class="badge badge-success tag_label">{{$tag->name}}</a>
                @endforeach
                </div> 
              </td>
              
              <td>
            <div class="forum_by">
            <small style="margin-bottom: 0; color: #666">{{$forum->created_at->diffForHumans()}}</small>
             <small>by <a href="{{route('profile', $forum->user->name)}}">{{$forum->user->name}}</a></small>
                
            </div>
            </td>
            </tr> 
            @endforeach
              </tbody>
            </table>
            <div class="row justify-content-center">
                 {!!$forums->links()!!} <!--pagination-->
            </div>
            
              </div>
              <div class="col-md-4">
               <br>   <a href="{{route('forum.create')}}" class="btn btn-success btn-block">Buat Pertanyaan</a><br>
               
            </div>
                </div>
                <hr style="margin-top: 0;"> 
                <div class="card">
                <div class="card-header"></div>
                <div class="card-body" style="background: #2F4799"></div>
                <div class="card-header"></div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div><br><br>
@endsection
 