<!-- modal DELETE CATEGORY-->

<div class="modal fade" id="modal-delete-category-{{$category->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST">  
                {{ csrf_field() }}  
                <div class="modal-body">
                    <div class="form-group">
                        <p>¿Seguro de eliminar la Categoria <strong>{{$category->name}}</strong>?</p>
                    </div>
                </div>
            
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->