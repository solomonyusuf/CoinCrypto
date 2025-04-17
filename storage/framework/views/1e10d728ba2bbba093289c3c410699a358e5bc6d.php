<div>
<form action="<?php echo e(route('update_editor', $article->id)); ?>" method="POST" class="container-fluid">
  <?php echo csrf_field(); ?>  
  <textarea name="editor" id="classic" rows="20" cols="20">
       <?php echo $article->content; ?>

      </textarea>

      <button type="submit" class="btn btn-primary mt-3 mb-3">Submit Article</button>
                         

    </form>

    
    
    </body>
</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/admin/editor-component.blade.php ENDPATH**/ ?>