@extends('main')

   @section('title','| Homepage')

    @section('content') 
      <div class="row">
        <div class="col-md-12">  
        <div class="jumbotron">
    <h1 class="display-4">welcome to my blog!</h1>
    <p class="lead">thank you so much for visiting,this is a test web site built with laravel.please read my latest post</p>
    <hr class="my-4">
    <p>intersting about new things</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">popular post</a>
    
      </div> 

     </div>
   </div> 
    
    <div class="row">
      <div class="col-sm-8">
        <div class="post">
          <h3>post title</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
          <a href="#" class="btn btn-primary">read more</a>
        </div>
        <hr>
        
      <div class="post">
          <h3>post title</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
          <a href="#" class="btn btn-primary">read more</a>
         </div>
         <hr>

        
      <div class="post">
          <h3>post title</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
          <a href="#" class="btn btn-primary">read more</a>
       </div>
       <hr>
    </div>  
      <div class="col-md-3 col-md-offset-1">
       <h2>sidebar</h2> 
     </div>
    </div>
   @endsection

   
   