<div class="container-fluid">
    <h4 class="mb-3 px-3">
        Publication Release
    </h4>
    <form enctype="multipart/form-data" action="{{ route('create_publication', $subscription->id) }}" method="post" class="container-fluid">
      @csrf  
      <textarea name="content" id="classic" rows="20" cols="20">
           
     </textarea>
    
          <button type="submit" class="btn btn-primary mt-3 mb-3">Submit Publication</button>
                             
    
        </form>
    
        <script>
            document.querySelectorAll('textarea').forEach((textarea, index) => {
              // Create a new div to replace the textarea visually
              const quillDiv = document.createElement('div');
              quillDiv.classList.add('quill-wrapper');
              textarea.parentNode.insertBefore(quillDiv, textarea.nextSibling);
        
              // Initialize Quill
              const quill = new Quill(quillDiv, {
                theme: 'snow'
              });
        
              // Set initial content from the textarea
              quill.root.innerHTML = textarea.value;
        
              // Optional: Sync changes back to textarea on form submit
              textarea.form?.addEventListener('submit', () => {
                textarea.value = quill.root.innerHTML;
              });
            });
          </script>
        
        </body>
    </div>
    