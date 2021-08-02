@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th></th>
            </thead>

            <tbody>
                @foreach($categories as $category)
                 <tr>
                     <td>
                         {{ $category->name}}
                     </td>
                     <td>
                         <a href="{{route('edit', $category->id)}}" class="btn btn-info btn-sm">
                            Edit
                         </a>
                     </td>
                     <td>
                         <form action="{{ route('destroy', $category->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this category?')">
                            @csrf
                            @method("DELETE")
                            <button type="submit"  onClick="$(this).parent().trigger('submit')" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                 </tr>
                @endforeach
            </tbody>
        </table>


        {{-- <div class="modal fade" id="exampleModel" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('destroy', $category->id) }}" method="POST" id="deletecategoryform">
                    @csrf
                    {{-- @method("DELETE") 
                     
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModelLabel">Delete category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are sure you want to delete this category
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secodary" data-dismiss="modal">No, go back</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </div>
                </form>
               
            </div> 
        </div>--}}



    </div>
    
</div>

@endsection

@section('scripts')

<script>
    function handleDelete(id){
        bar form = getelementById('deletCategoryForm')
        form action = '/categories/' +id
        $('#deleteModal').modal('show')
    }
</script>
    
@endsection