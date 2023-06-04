<x-app-layout>
   Add Category
    <form method="post" action="/inventory/category/adddata">
      @csrf
      <div class="form-group">
      <level for="">Name</lavel>
          <input type="text" name="name" class="form-control" required><br>
       </level for="">Code</lavel>
      <input type="text" name=code class="form-control" required><br>   
</div>
<div class="form-group">
<button class="btn btn-success">
  save
</button>
</div>  

    </form>  
</x-app-layout>




