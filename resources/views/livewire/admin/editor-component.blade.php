<div>
<div class="container-fluid">
    <textarea id="classic" rows="20" cols="20">
        
        <p><img style="float: right;" title="Tiny Logo" src="https://www.tiny.cloud/docs/images/logos/android-chrome-256x256.png" alt="TinyMCE Logo" width="128" height="128"></p>
      
        
        <h2>The world’s first rich text editor in the cloud</h2>
      
        <p>
          Have you heard about Tiny Cloud?
          It’s the first step in our journey to help you deliver great content creation experiences, no matter your level of expertise.
          50,000 developers already agree.
          They get free access to our global CDN, image proxy services and auto updates to the TinyMCE editor.
          They’re also ready for some exciting updates coming soon.
        </p>
      
        <p>
          One of these enhancements is <strong>Tiny Drive</strong>: imagine file management for TinyMCE, in the cloud, made super easy.
          Learn more at <a href='https://www.tiny.cloud/drive/'>Tiny Cloud - Tiny Drive</a>, where you’ll find a working demo and an opportunity to provide feedback to the product team.
        </p>
      
        <h3>An editor for every project</h3>
      
        <p>
          Here are some of our customer’s most common use cases for TinyMCE:
          <ul>
            <li>Content Management Systems (<em>e.g. WordPress, Umbraco</em>)</li>
            <li>Learning Management Systems (<em>e.g. Blackboard</em>)</li>
            <li>Customer Relationship Management and marketing automation (<em>e.g. Marketo</em>)</li>
            <li>Email marketing (<em>e.g. Constant Contact</em>)</li>
            <li>Content creation in SaaS systems (<em>e.g. Eventbrite, Evernote, GoFundMe, Zendesk</em>)</li>
          </ul>
        </p>
      
        <p>
          And those use cases are just the start.
          TinyMCE is incredibly flexible, and with hundreds of APIs there’s likely a solution for your editor project.
          If you haven’t experienced Tiny Cloud, get started today.
          You’ll even get a free trial of our premium plugins – no credit card required!
        </p>
      
      </textarea>


</div>

 <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/10y2nmlx6sys1h3mbly92p71sfnrb089h0bxuesa03ycudht/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
    selector: 'textarea',
    height: 600, 
    plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Apr 6, 2025:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
</script>
</div>
