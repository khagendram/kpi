<x-app-layout>
   Update Data
    <form method="post" action="/inventory/category/Editpost">
      @csrf
      <input type="hidden" name="id" value="{{$category->id}}">

      <div class="form-group">
      <label for="">Name</label>
          <input type="text" name="name" class="form-control"value="{{$category->name}}" required><br>
       </lebel for="">Code</label>
      <input type="text" name=code class="form-control" value=" {{$category->code}}" required><br>   
</div>
<div class="form-group">
<button class="btn btn-success">
  Update
</button>
</div>  

    </form>  
</x-app-layout>