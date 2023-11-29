<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage<b> Products</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Product</span></a>
                        
                    </div>
                </div>
            </div>
             
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                         
                        <th>Product</th>
                        <th>Categroy</th>
                        <th>Price</th>
                        <th>SKU</th>
                        <th>Model</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($products as $product) { ?>
                    <tr>
                     
                        <td><?=$product['product']?></td>
                        <td><?=$product['category']?></td>
                        <td><?=$product['price']?></td>
                        <td><?=$product['sku']?></td>
                        <td><?=$product['model']?></td>
                        <td>
                            <a href="#editProductModal"   data-id="<?=$product['id']?>"class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="#deleteProductModal" data-delete_id="<?=$product['id']?>"  class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
                <?php } ?>  
                </tbody>
            </table>
             
        </div>
    </div>        
</div>
<!-- Add Modal HTML -->
<div id="addProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <form method ="post" action="<?= site_url('/add-product') ?>">
                <div class="modal-header">                        
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" name ="product" id = "product" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Categroy</label>
                        <input type="text"  name ="category" id = "category" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name ="price" id ="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>SKU</label>
                        <input type="text"  name ="sku"  id = "sku" class="form-control" required>
                    </div>    
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text"  name ="model" name = "model" class="form-control" required>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <form method ="post" action="<?= site_url('/update-product') ?>">
                <div class="modal-header">                        
                    <h4 class="modal-title">Update Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" name ="product" id = "edit_product" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Categroy</label>
                        <input type="text"  name ="category" id = "edit_category" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name ="price" id ="edit_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>SKU</label>
                        <input type="text"  name ="sku"  id = "edit_sku" class="form-control" required>
                    </div>    
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text"  name ="model" id = "edit_model" class="form-control" required>
                        <input type="hidden"  name ="id" id = "edit_id" required>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
 
<!-- Delete Modal HTML -->
<div id="deleteProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method ="post" action="<?= site_url('/delete-product') ?>">
                <div class="modal-header">                        
                    <h4 class="modal-title">Delete Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                    
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                    <input type="hidden" id="delete_id" name="delete_id">
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>