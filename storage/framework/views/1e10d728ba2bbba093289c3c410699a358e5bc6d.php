<div>
<div class="container-fluid">
    <textarea id="classic" rows="20" cols="20">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }
    
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f8f8f8;
            }
    
            .newsletter-container {
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 20px;
                max-width: 600px;
                width: 100%;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
    
            .newsletter-container h2 {
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 5px;
            }
    
            .newsletter-container p {
                font-size: 14px;
                color: #555;
                margin-bottom: 15px;
            }
    
            .newsletter-container a {
                color: #000;
                font-weight: bold;
                text-decoration: none;
            }
    
            .newsletter-form {
                display: flex;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
            }
    
            .newsletter-form input {
                flex: 1;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
                outline: none;
            }
    
            .newsletter-form button {
                background-color: #ffeb80;
                border: none;
                padding: 12px 18px;
                font-size: 14px;
                font-weight: bold;
                border-radius: 5px;
                cursor: pointer;
                color: #000;
                transition: background 0.3s;
            }
    
            .newsletter-form button:hover {
                background-color: #ffd700;
            }
    
            .disclaimer {
                font-size: 12px;
                color: #666;
                margin-top: 10px;
            }
    
            .disclaimer a {
                color: #000;
                text-decoration: none;
            }
    
            /* Responsive Design */
            @media (max-width: 500px) {
                .newsletter-form {
                    flex-direction: column;
                    gap: 5px;
                }
    
                .newsletter-form input {
                    width: 100%;
                }
    
                .newsletter-form button {
                    width: 100%;
                }
            }
        </style>
        <div class="newsletter-container">
            <h2>Don't miss another story.</h2>
            <p>Subscribe to the Crypto Daybook Americas Newsletter today. <a href="#">See all newsletters</a></p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your Email" required>
                <button type="submit">Sign me up ▶</button>
            </form>
            <p class="disclaimer">
                By signing up, you will receive emails about CoinDesk products and you agree to our 
                <a href="#">terms of use</a> and <a href="#">privacy policy</a>.
            </p>
        </div>
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
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/admin/editor-component.blade.php ENDPATH**/ ?>