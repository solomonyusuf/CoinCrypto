<div>
<form action="{{ route('update_editor', $article->id) }}" method="POST" class="container-fluid">
  @csrf  
  <textarea name="editor" id="classic" rows="20" cols="20">
       {!! $article->content !!}
      </textarea>

      <button type="submit" class="btn btn-primary mt-3 mb-3">Submit Article</button>
                         

    </form>

    
    
    </body>
</div>
