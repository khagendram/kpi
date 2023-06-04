<x-app-layout>
<h1>Category Listing page </h1> 
<hr>

<class="container my-5 py-5 px-5 mx-5">
    <!-- Search input -->
    <form>
       Search Item <input type="search" placeholder="Find user here" name="search">
    </form>

<hr>
<table class="table table-stiped table hover">
<tr>
    <th>ID</th>
    <th> Name</th>
    <th>code</th>
    <th> Action</th>
</tr>
<tbody>
    @foreach($categoryList as $category)
    <tr>
        <td>
            {{$category->id}}
        </td>
        <td>
            {{$category->name}}
        </td>
        <td>
            {{$category->code}}
        </td>
        <td class="form-group">

    
           <td> <a href="/inventory/category/edit?id={{$category->id}}" class=" btn btn-primary"> editme </a>        
         <a href="/inventory/category/delete?id={{$category->id}}" class=" btn btn-danger"> Delete </a> </td>
    </tr>
    @endforeach
</tbody>
</table>
</x-app-layout>