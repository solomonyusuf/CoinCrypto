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
    
        
        </body>
    </div>
    