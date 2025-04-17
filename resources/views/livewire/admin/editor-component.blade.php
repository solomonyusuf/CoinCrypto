<div>
<form action="{{ route('update_editor', $article->id) }}" method="POST" class="container-fluid">
  @csrf  
  <textarea name="editor" id="classic" rows="20" cols="20">
       {!! $article->content !!}
      </textarea>

      <button type="submit" class="btn btn-primary mt-3 mb-3">Submit Article</button>
                         

    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('textarea:not(.ignore-editor)').forEach((textarea) => {
                ClassicEditor
                    .create(textarea, {
                        toolbar: [
                            'heading', '|', 'bold', 'italic', 'underline', 'link', '|', 
                            'bulletedList', 'numberedList', 'blockQuote', '|', 
                            'undo', 'redo', '|', 'imageUpload', 'mediaEmbed', 'insertTable'
                        ],
                        image: {
                            toolbar: [
                                'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight',
                                '|', 'imageTextAlternative', 'toggleImageCaption', 'imageResize'
                            ],
                            styles: ['alignLeft', 'alignRight', 'full'],
                            resizeUnit: 'px'
                        },
                        ckfinder: {
                            uploadUrl: "{{ route('upload_image') }}?_token={{ csrf_token() }}",
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        },
                        wordCount: {
                            onUpdate: stats => {
                                console.log(`Words: ${stats.words}, Characters: ${stats.characters}`);
                            }
                        }
                    })
                    .then(editor => {
                        textarea.dataset.editorInstance = editor;
                    })
                    .catch(error => console.error(error));
            });
        });
    </script>
    
    
    </body>
</div>
