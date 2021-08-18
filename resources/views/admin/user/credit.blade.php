

<div class="login-dialog">
    
    <span class="closex"></span>
    <div id="result"></div>
      {{ csrf_field()}}
      
           
    <form id="credit_form"  enctype="multipart/form-data">
        <label for="">Số credit:</label>
        <input type="text" id="credit" name="credit">
        <a id="credit-btn" >
                <button class="button">
                    Nạp Credit
                </button>
        </a>
    </form>
      
</div>
