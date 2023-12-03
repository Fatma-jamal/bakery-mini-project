window.addEventListener('scroll', function() {
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');

    if (window.pageYOffset > 100) {
        scrollToTopBtn.style.display = 'block';
    } 
    else {
        scrollToTopBtn.style.display = 'none';
    }
    });

    document.getElementById('scrollToTopBtn').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
    // var deleteProduct = document.getElementById('delete');
  //   $(document).ready(function () {

  //     // Delete 
  //     $('.delete').click(function () {
  //         var el = this;

  //         // Delete id
  //         var deleteid = $(this).data('id');

  //         // Confirm box
  //         bootbox.confirm("Do you really want to delete record?", function (result) {

  //             if (result) {
  //                 // AJAX Request
  //                 $.ajax({
  //                     url: 'deleteproduct.php',
  //                     type: 'POST',
  //                     data: {id: deleteid},
  //                     success: function (response) {

  //                         // Removing row from HTML Table
  //                         if (response == 1) {
  //                             $(el).closest('div').css('background', 'tomato');
  //                             $(el).closest('div').fadeOut(800, function () {
  //                                 $(this).remove();
  //                             });
  //                         } else {
  //                             bootbox.alert('Record not deleted.');
  //                         }

  //                     }
  //                 });
  //             }

  //         });

  //     });
  // });
    // function deleteProduct(productId) {
    //   $.get('deleteproduct.php', { productId: productId }, function(data, status) {
    //     if (status === 'success') {
    //       // Product deleted successfully
    //       console.log('Product deleted');
    //     } else {
    //       // Error deleting product
    //       console.error('Error deleting product');
    //     }
    //   });
    // }
    // deleteButtons.forEach(button => {
    //     button.addEventListener('click', () => {
    //       const productId = button.dataset.productId;
          
    //       // Display confirmation alert
    //       const confirmed = window.confirm('Are you sure you want to delete this product?');
          
    //       // If user confirms deletion
    //       if (confirmed) {
    //         // Pass the product ID to PHP for deletion
    //         deleteProduct(productId);
    //       }
    //     });
    //   });
      
      // Function to delete product via AJAX to PHP script
      // function deleteProduct(productId) {
      //   const xhr = new XMLHttpRequest();
      //   xhr.open('POST', 'delete_product.php', true);
      //   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        
      //   // Send the product ID as data
      //   xhr.send('productId=' + encodeURIComponent(productId));
        
      //   // Handle the response from PHP
      //   xhr.onload = function() {
      //     if (xhr.status === 200) {
      //       // Product deleted successfully
      //       console.log('Product deleted');
      //     } else {
      //       // Error deleting product
      //       console.error('Error deleting product');
      //     }
      //   };
      // }