
<div class="login-container cover">
  <div class="login-card create">
      <div>
          <form  id="login-form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="form" value="updateproduct">
          <div class="flex">
            <div class="input-container form-add">
              <input type="text" name="title" required=""/>
              <label>Product name</label>		
            </div>
            <div class="input-container form-add">		
              <input type="text" name="description" required=""/>
              <label>Description</label>
            </div>
            <div class="input-container form-add">		
              <input type="text" name="price" required=""/>
              <label>Price</label>
            </div>
            <div class="input-container form-add">		
              <input type="file" name="image" required=""/>
              <label>Image</label>
            </div>
            <div class="input-container form-add">		
              <input type="checkbox" name="category" value="1">
              <label>Category</label>
            </div>
            <div class="input-container form-add">		
              <textarea name="flavors" required=""></textarea>
              <label>Flavors</label>
            </div>
          </div>
          <input type="submit" value="Add Product" class="loginBtn">

          </form>
      </div>
    </div>
</div>
<button id="scrollToTopBtn" title="Go to top">&#8593;</button>
